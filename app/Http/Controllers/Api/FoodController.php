<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;


class FoodController extends BaseController
{
    /**
     * Get all foods with filters and pagination
     * GET /api/v1/foods
     */
    public function index(Request $request)
    {
        try {
            $query = Food::query();

            // Apply filters
            if ($request->has('region_id')) {
                $query->byRegion($request->region_id);
            }

            if ($request->has('category_id')) {
                $query->byCategory($request->category_id);
            }

            // Pagination
            $perPage = $request->get('per_page', 10);
            $foods = $query->orderBy('likes_count', 'desc')
                ->paginate($perPage);

            // Format response
            $meta = [
                'current_page' => $foods->currentPage(),
                'total_pages' => $foods->lastPage(),
                'per_page' => $foods->perPage(),
                'total_items' => $foods->total(),
                'has_next' => $foods->hasMorePages()
            ];

            return $this->sendResponse($foods->items(), 'Foods retrieved successfully', $meta);
        } catch (\Exception $e) {
            return $this->sendError('Failed to retrieve foods', [], 500);
        }
    }

    /**
     * Get featured foods for home screen
     * GET /api/v1/foods/featured
     * Query params: limit (optional, default: 10)
     */
    public function featured(Request $request)
    {
        try {
            $limit = $request->get('limit', 10);
            $limit = min($limit, 50); // max 50 results

            $foods = Food::featured()
                ->orderBy('likes_count', 'desc')
                ->limit($limit)
                ->get();

            return $this->sendResponse($foods, 'Featured foods retrieved successfully');
        } catch (\Exception $e) {
            return $this->sendError('Failed to retrieve featured foods', [], 500);
        }
    }

    /**
     * Global search foods
     * GET /api/v1/foods/search
     * Query params: q (required), limit (optional, default: 10, max: 50)
     */
    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required|string|min:2',
            'limit' => 'nullable|integer|min:1|max:50'
        ]);

        try {
            $searchTerm = $request->get('q');
            $limit = $request->get('limit', 10);
            $limit = min($limit, 50); // enforce max 50

            $query = Food::search($searchTerm);

            // Order by relevance - prioritize food name matches
            $foods = $query->orderByRaw("
                CASE
                    WHEN name LIKE ? THEN 1
                    WHEN short_description LIKE ? THEN 2
                    ELSE 3
                END
            ", ["%{$searchTerm}%", "%{$searchTerm}%"])
                ->orderBy('likes_count', 'desc')
                ->limit($limit)
                ->get();

            // Simple response without pagination
            $meta = [
                'total_items' => $foods->count(),
                'search_query' => $searchTerm,
                'limit' => $limit
            ];

            return $this->sendResponse($foods, 'Search results retrieved successfully', $meta);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return $this->sendError('Validation failed', [
                ['field' => 'q', 'message' => 'Search query is required and must be at least 2 characters']
            ], 422);
        } catch (\Exception $e) {
            return $this->sendError('Search failed', [], 500);
        }
    }

    /**
     * Get food detail
     * GET /api/v1/foods/{id}
     */
    public function show($id)
    {
        try {
            $food = Food::with(['galleries'])->find($id);

            if (!$food) {
                return $this->sendError('Food not found', [
                    ['field' => 'id', 'message' => "Food with ID {$id} not found"]
                ], 404);
            }

            // Increment view count
            $food->incrementViewCount();

            return $this->sendResponse($food, 'Food detail retrieved successfully');
        } catch (\Exception $e) {
            return $this->sendError('Failed to retrieve food detail', [], 500);
        }
    }

    /**
     * Get food galleries
     * GET /api/v1/foods/{id}/galleries
     */
    public function galleries($id)
    {
        try {
            $food = Food::find($id);

            if (!$food) {
                return $this->sendError('Food not found', [
                    ['field' => 'id', 'message' => "Food with ID {$id} not found"]
                ], 404);
            }

            $galleries = $food->galleries;

            return $this->sendResponse($galleries, 'Food galleries retrieved successfully');
        } catch (\Exception $e) {
            return $this->sendError('Failed to retrieve galleries', [], 500);
        }
    }

    /**
     * Like food (simple increment)
     * POST /api/v1/foods/{id}/like
     */
    public function like($id)
    {
        try {
            $food = Food::find($id);

            if (!$food) {
                return $this->sendError('Food not found', [
                    ['field' => 'id', 'message' => "Food with ID {$id} not found"]
                ], 404);
            }

            // Simple increment like count
            $food->incrementLikeCount();

            return $this->sendResponse([
                'likes_count' => $food->fresh()->likes_count
            ], 'Food liked successfully');
        } catch (\Exception $e) {
            return $this->sendError('Failed to like food', [], 500);
        }
    }

    /**
     * Unlike food (simple decrement)
     * POST /api/v1/foods/{id}/unlike
     */
    public function unlike($id)
    {
        try {
            $food = Food::find($id);

            if (!$food) {
                return $this->sendError('Food not found', [
                    ['field' => 'id', 'message' => "Food with ID {$id} not found"]
                ], 404);
            }

            // Prevent negative likes count
            if ($food->likes_count > 0) {
                $food->decrementLikeCount();
            }

            return $this->sendResponse([
                'likes_count' => $food->fresh()->likes_count
            ], 'Food unliked successfully');
        } catch (\Exception $e) {
            return $this->sendError('Failed to unlike food', [], 500);
        }
    }
}
