<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('foods')
            ->orderBy('name')
            ->paginate(15);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:svg,png,jpg|max:1024',
            'status' => 'required|in:active,inactive'
        ]);

        // Handle icon upload
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '_' . Str::slug($request->name) . '.' . $icon->getClientOriginalExtension();
            $iconPath = $icon->storeAs('icons', $iconName, 'public');
            $validated['icon_url'] = '/storage/' . $iconPath;
        }

        Category::create($validated);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:svg,png,jpg|max:1024',
            'status' => 'required|in:active,inactive'
        ]);

        // Handle icon upload
        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($category->icon_url) {
                $oldPath = str_replace('/storage/', '', $category->icon_url);
                Storage::disk('public')->delete($oldPath);
            }

            // Upload new icon
            $icon = $request->file('icon');
            $iconName = time() . '_' . Str::slug($request->name) . '.' . $icon->getClientOriginalExtension();
            $iconPath = $icon->storeAs('icons', $iconName, 'public');
            $validated['icon_url'] = '/storage/' . $iconPath;
        }

        $category->update($validated);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil diupdate!');
    }

    public function destroy(Category $category)
    {
        // Check if category has foods
        if ($category->foods()->count() > 0) {
            return redirect()
                ->route('admin.categories.index')
                ->with('error', 'Tidak dapat menghapus kategori yang masih memiliki makanan!');
        }

        // Delete icon
        if ($category->icon_url) {
            $path = str_replace('/storage/', '', $category->icon_url);
            Storage::disk('public')->delete($path);
        }

        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
