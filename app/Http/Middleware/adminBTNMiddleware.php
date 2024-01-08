<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Menhely;
use App\Models\User;

class adminBTNMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (auth()->user()->type == 1) {
                return $next($request);
            } else {
                
                return redirect()->route('menhelyProfil')->with('alert', 'A Felhasználók kezeléséhez adminisztrátori jogok szükségesek!');
                


            }
        }
    }
}
