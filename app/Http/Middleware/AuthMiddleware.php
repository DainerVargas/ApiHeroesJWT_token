<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (Exception $ex) {
            if ($ex instanceof TokenInvalidException) {
                return response()->json([
                  'message' => 'token invalid'
                ], 401);
            }
            if ($ex instanceof TokenExpiredException) {
                return response()->json([
                  'message' => 'token expired'
                ], 401);
            }
            return response()->json(['status' => 'token not found'], 401);

        }
        return $next($request);
    }
}
