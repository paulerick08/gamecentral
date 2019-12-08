<?php

namespace App\Http\Middleware;

use Closure;

class CheckDigitalWinClientCredentials
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $header = $request->header('Authorization');

        if ($header != 'Bearer lhilbE4PFHqZrIPdTFVLAQTjsRYZjAnbj09ZWhqc') {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return $next($request);
    }
}
