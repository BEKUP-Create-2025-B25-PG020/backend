<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Success response
     */
    public function sendResponse($data, $message = 'Operation successful', $meta = null)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data,
            'meta' => $meta
        ];

        return response()->json($response, 200);
    }

    /**
     * Error response
     */
    public function sendError($message, $errors = [], $code = 400)
    {
        $response = [
            'success' => false,
            'message' => $message,
            'data' => null,
            'meta' => null,
            'errors' => $errors
        ];

        return response()->json($response, $code);
    }
}
