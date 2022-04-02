<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NpmMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $npm = '197006001' ;
        if(
            !$request->header('npm') ||
            $request->header('npm') !=$npm)
            return response()->json([
                'code' => 1,
                "message" => 'error'
            ], \Illuminate\Http\Response::HTTP_UNAUTHORIZED);
        return $next($request);
    }
}
