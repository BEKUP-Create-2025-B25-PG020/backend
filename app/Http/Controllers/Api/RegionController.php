<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends BaseController
{
    //
      /**
     * Get all regions
     * GET /api/v1/regions
     */
    public function index()
    {
        try {
            $regions = Region::orderBy('region_name')->get();

            return $this->sendResponse($regions, 'Regions retrieved successfully');

        } catch (\Exception $e) {
            return $this->sendError('Failed to retrieve regions', [], 500);
        }
    }
}
