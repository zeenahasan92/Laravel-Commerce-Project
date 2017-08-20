<?php

namespace App\Http\Middleware;

use Closure;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('Auth');
        if (!$token)
            return response()
                ->json(['errors' => ['Invalid Token']],
                    422);

        try {
            $user = JWTAuth::toUser($token);
            if (!$user)
                return response()
                    ->json(['errors' => ['Invalid Token']],
                        401);

        } catch (JWTException $e) {
            return response()->json(['error' => 'Invalid Token'], 401);
        }

        return $next($request);
    }
}
