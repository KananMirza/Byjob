<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkTokenApi
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
        $token = "FYzkwEo9OnWOL2Zre2X9n9CWvud762SH";
        if ($token != $request->header('X-Static-Token')) {
            return response()->json(array('status' => 'error', 'message' => 'Unauthorized'), Response::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }
}
