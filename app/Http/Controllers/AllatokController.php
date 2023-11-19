<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use App\Models\Kep;
use App\Models\Szin;
use App\Models\Allat;
use App\Models\Menhely;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AllatokController extends Controller
{


    public function egyAllat($a_id) // Egy állat adatai
    {
    $allat = Allat::find($a_id);
    return view('egyAllat', compact('allat'));
    }


    public function kartyaKep(string $a_id) // állat kartyán a kép
    {
    $allat = Allat::find($a_id);
    if ($allat && $allat->kep) {
        $image = $allat->kep;
        return view('welcome', compact('allat', 'image'));
    }
    $error = 'Kép nem található';
    return view('welcome', compact('allat', 'error'));
    }


    public function allatokLista()
    {
        $allatok = Allat::all();
        return view('allatok',  ["allatok" => $allatok]);
    }
    

    /**
     * Display a listing of the resource.
     */
/*
public function index()
{
    $allatok = Allat::paginate(5);

    $this->authorize('index-allat', $allatok->first(), $menhely);

    return view('menhelyAllatai', compact('allatok'));
}

Itt a $allatok->first() az első állatot jelképezi a listából, míg a $menhely a menhely objektum. 
Az authorize hívás során a megfelelő argumentumokat használva a záradékban definiált engedélyt lehet alkalmazni az első állatra és a menhelyre.

*/ 
    
    public function index()
    {
        if (auth()->check() && auth()->user()->type === 2) {
        $email = auth()->user()->email;
        $menhely = Menhely::where('email', $email)->first();
        if ($menhely) {
            // Ha találtunk egyezést, akkor beállítjuk az "m_id"-t a menhely "m_id"-jére
            $m_id = $menhely->m_id;
             }
             $allatok = Allat::where('m_id', $m_id)->paginate(5);

            return view('menhelyAllatai', compact('allatok'));
            }
     }  
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create-allat');
        $fajok = Faj::all();
        $szinek = Szin::all();
        $menhelyek = Menhely::all();
        return view('allatregisztracio', compact('fajok', 'szinek'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nev' => 'required|min:3|max:100',
        'faj' => 'required',
        'szin' => 'required',
        'kor' => 'required',
        'leiras' => 'required',
        'chip' => 'required',
        'ivar_allapot' => 'required',
        'nem' => 'required',
    ]);
    // Az aktuális bejelentkezett menhely "m_id"-jének lekérése

       
       // Ellenőrizzük, hogy a bejelentkezett felhasználó "menhely" típusú-e
    if (auth()->check() && auth()->user()->type === 2) {
        $email = auth()->user()->email;
        $menhely = Menhely::where('email', $email)->first();
        if ($menhely) {
            // Ha találtunk egyezést, akkor beállítjuk az "m_id"-t a menhely "m_id"-jére
            auth()->user()->m_id = $menhely->m_id;
        }
    }

        $allat = new Allat();
        $allat->nev = $request->nev;
        $allat->af_id = $request->faj;
        $allat->szin_id = $request->szin;
        $allat->m_id = auth()->user()->m_id;; // Az aktuális menhely "m_id"-jének beállítása
        $allat->kor = $request->kor; 
        $allat->leiras = $request->leiras;
        $allat->nem = $request->nem;
        $allat->ivar_allapot = $request->ivar_allapot;
        $allat->chip = $request->chip;
        $allat->save();
   
    // Most már megvan az állat rekord a_id-ja, ami az automatikusan generált id
    // El kell tárolni valahol az aktuális $allat->a_id-t
    $pendingAnimalId = $allat->a_id;

    // Átirányítjuk a "kepek.create" oldalra, és átadjuk az "a_id"-t
    return redirect()->route('kepek.create', ['a_id' => $pendingAnimalId]);

    
    }
    

    /**
     * Display the specified resource.
     */
    public function sajatAllat(string $a_id)
    {
        //a find itt megkeresi a kijelölt id-t, amit meg akarok mutatni
        $allat = Allat::find($a_id);
        return view('sajatAllat', compact('allat'));
    
          
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}


    


