<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    //
    /**
     * Get all active categories
     * GET /api/v1/categories
     */
    public function index()
    {
        try {
            $categories = Category::active()->orderBy('name')->get();

            return $this->sendResponse($categories, 'Categories retrieved successfully');
        } catch (\Exception $e) {
            return $this->sendError('Failed to retrieve categories', [], 500);
        }
    }
}
