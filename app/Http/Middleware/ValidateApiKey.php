<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class ValidateApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('x-api-key');

        // Check if API key exists and is valid
        if (!$apiKey || $apiKey !== config('app.api_key')) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized - Invalid API Key',
                'data' => null,
                'meta' => null,
                'errors' => [
                    ['field' => 'api_key', 'message' => 'Valid API Key is required']
                ]
            ], 401);
        }

        return $next($request);
    }
}
