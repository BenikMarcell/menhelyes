<?php

// app/Http/Middleware/MenhelyMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Menhely;

class MenhelyMiddleware
{
 
 
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->type == 2) {
            
            error_log('Some message here.');
            // Ellenőrizd, hogy a felhasználó bejelentkezett és "menhely" típusú
            // Most megpróbáljuk megtalálni azt a menhelyet, ahol az email cím megegyezik
            /*
            $email = auth()->user()->email;
            $menhely = Menhely::where('email', $email)->first();
    
            if ($menhely) {
                // Ha találtunk egyezést, akkor beállíthatod az "m_id"-t a menhely "m_id"-jére
                auth()->user()->m_id = $menhely->m_id;
                */
            }
        }
    
        return $next($request);
    }
    
 
 
 
 
 
 
 
 
 
    /*public function handle(Request $request, Closure $next)
    {



    if (auth()->check() && auth()->user()->type === 2) {
        // Ellenőrizzük, hogy a felhasználó bejelentkezett és "menhely" típusú
        // Most megpróbáljuk megtalálni azt a menhelyet, ahol az email cím megegyezik
        
        $email = strtolower(auth()->user()->email);
        $menhely = Menhely::where('email', $email)->first();

       // $email = auth()->user()->email;
       // $menhely = Menhely::where('email', $email)->first();

        if ($menhely) {
            // Ha találtunk egyezést, akkor beállítjuk az "m_id"-t
            auth()->user()->m_id = $menhely->m_id;
        }
    }

    return $next($request);
    }*/

    
    
    

}