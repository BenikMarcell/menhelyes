<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MenhelyKizarolag
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
   /* if (auth()->user() && auth()->user()->isMenhely()) {
        return $next($request);
    }

    abort(403, 'Nincs jogosultságod az állatok létrehozásához.');*/
}
}
