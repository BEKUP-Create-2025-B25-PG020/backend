<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::withCount('foods')
            ->orderBy('region_name')
            ->paginate(15);

        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'region_name' => 'required|string|max:255',
            'regency_city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'island' => 'required|string|max:255',
            'region_code' => 'required|string|max:10|unique:regions,region_code'
        ]);

        Region::create($validated);

        return redirect()
            ->route('admin.regions.index')
            ->with('success', 'Daerah berhasil ditambahkan!');
    }

    public function edit(Region $region)
    {
        return view('admin.regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $validated = $request->validate([
            'region_name' => 'required|string|max:255',
            'regency_city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'island' => 'required|string|max:255',
            'region_code' => 'required|string|max:10|unique:regions,region_code,' . $region->id
        ]);

        $region->update($validated);

        return redirect()
            ->route('admin.regions.index')
            ->with('success', 'Daerah berhasil diupdate!');
    }

    public function destroy(Region $region)
    {
        // Check if region has foods
        if ($region->foods()->count() > 0) {
            return redirect()
                ->route('admin.regions.index')
                ->with('error', 'Tidak dapat menghapus daerah yang masih memiliki makanan!');
        }

        $region->delete();

        return redirect()
            ->route('admin.regions.index')
            ->with('success', 'Daerah berhasil dihapus!');
    }
}
