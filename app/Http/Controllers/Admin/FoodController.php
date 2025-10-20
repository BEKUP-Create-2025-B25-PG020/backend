<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FoodController extends Controller
{
    /**
     * Display a listing of foods
     */
    public function index()
    {
        $foods = Food::with(['region', 'category'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new food
     */
    public function create()
    {
        $regions = Region::orderBy('region_name')->get();
        $categories = Category::active()->orderBy('name')->get();

        return view('admin.foods.create', compact('regions', 'categories'));
    }

    /**
     * Store a newly created food
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
            'category_id' => 'required|exists:categories,id',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'food_history' => 'nullable|string',
            'interesting_facts' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_featured' => 'boolean'
        ]);

        // Handle main image upload
        if ($request->hasFile('main_image')) {
            $image = $request->file('main_image');
            $imageName = time() . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('foods', $imageName, 'public');
            $validated['main_image_url'] = '/storage/' . $imagePath;
        }

        // Create food
        $food = Food::create($validated);

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $index => $image) {
                $galleryName = time() . '_gallery_' . $index . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
                $galleryPath = $image->storeAs('galleries', $galleryName, 'public');

                $food->galleries()->create([
                    'image_url' => '/storage/' . $galleryPath,
                    'main_photo' => false
                ]);
            }
        }

        return redirect()
            ->route('admin.foods.index')
            ->with('success', 'Makanan berhasil ditambahkan!');
    }

    /**
     * Display the specified food
     */
    public function show(Food $food)
    {
        $food->load(['region', 'category', 'galleries']);
        return view('admin.foods.show', compact('food'));
    }

    /**
     * Show the form for editing the specified food
     */
    public function edit(Food $food)
    {
        $regions = Region::orderBy('region_name')->get();
        $categories = Category::active()->orderBy('name')->get();

        return view('admin.foods.edit', compact('food', 'regions', 'categories'));
    }

    /**
     * Update the specified food
     */
    public function update(Request $request, Food $food)
    {
        // Set is_featured to 0 if not present
        $request->merge([
            'is_featured' => $request->has('is_featured') ? 1 : 0
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
            'category_id' => 'required|exists:categories,id',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'food_history' => 'nullable|string',
            'interesting_facts' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_featured' => 'boolean'
        ]);

        // Handle main image upload if new image provided
        if ($request->hasFile('main_image')) {
            // Delete old image
            if ($food->main_image_url) {
                $oldPath = str_replace('/storage/', '', $food->main_image_url);
                Storage::disk('public')->delete($oldPath);
            }

            // Upload new image
            $image = $request->file('main_image');
            $imageName = time() . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('foods', $imageName, 'public');
            $validated['main_image_url'] = '/storage/' . $imagePath;
        }

        // Handle gallery deletion
        if ($request->filled('delete_gallery_ids')) {
            $deleteIds = explode(',', $request->delete_gallery_ids);
            foreach ($deleteIds as $galleryId) {
                $gallery = $food->galleries()->find($galleryId);
                if ($gallery) {
                    // Delete image file
                    $path = str_replace('/storage/', '', $gallery->image_url);
                    Storage::disk('public')->delete($path);
                    // Delete record
                    $gallery->delete();
                }
            }
        }

        // Handle new gallery images upload
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $index => $image) {
                $galleryName = time() . '_gallery_' . $index . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
                $galleryPath = $image->storeAs('galleries', $galleryName, 'public');

                $food->galleries()->create([
                    'image_url' => '/storage/' . $galleryPath,
                    'main_photo' => false
                ]);
            }
        }

        // Update food
        $food->update($validated);

        return redirect()
            ->route('admin.foods.index')
            ->with('success', 'Makanan berhasil diupdate!');
    }

    /**
     * Remove the specified food
     */
    public function destroy(Food $food)
    {
        // Delete main image
        if ($food->main_image_url) {
            $path = str_replace('/storage/', '', $food->main_image_url);
            Storage::disk('public')->delete($path);
        }

        // Delete galleries images
        foreach ($food->galleries as $gallery) {
            $path = str_replace('/storage/', '', $gallery->image_url);
            Storage::disk('public')->delete($path);
        }

        // Delete food (galleries will be deleted by cascade)
        $food->delete();

        return redirect()
            ->route('admin.foods.index')
            ->with('success', 'Makanan berhasil dihapus!');
    }
}
