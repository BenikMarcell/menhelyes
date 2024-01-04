<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Menhely;
use App\Models\User;


class isAdminMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check())
        {
            if(auth()->user()->type == 1){
                return $next($request);                
            }
            else {
                return response()->view('home');
            }
        }
        
        
    }


    
}
