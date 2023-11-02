<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use App\Models\Kep;
use App\Models\Szin;
use App\Models\Allat;
use App\Models\Menhely;
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
    
    public function index()
    {
    $allatok = Allat::Paginate(5);
    return view('menhelyAllatai', compact('allatok'));
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
  
        $allat = new Allat();
        $allat->nev = $request->nev;
        $allat->af_id = $request->faj;
        $allat->szin_id = $request->szin;
        $allat->m_id = $request->m_id;
        $allat->kor = $request->kor;
        $allat->leiras = $request->leiras;
        $allat->nem = $request->nem;
        $allat->ivar_allapot = $request->ivar_allapot;
        $allat->chip = $request->chip;
        $allat->save();

        $allatok = Allat::paginate(5);


       // Most már megvan az állat rekord a_id-ja, ami az automatikusan generált id
    // El kell tárolni valahol az aktuális $allat->a_id-t
    $pendingAnimalId = $allat->a_id;

    // Átirányítjuk a "kepek.create" oldalra, és átadjuk az "a_id"-t
    return redirect()->route('kepek.create', ['a_id' => $pendingAnimalId]);

    //return view('menhelyAllatai', compact('allatok', 'pendingAnimalId'))->with('success', 'Regisztráció sikeresen létrehozva.');

       //return view('menhelyAllatai', ['allatok' => $allatok])->with('success', 'Regisztráció sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $a_id)
    {
        //a find itt megkeresi a kijelölt id-t, amit meg akarok mutatni
        $allat = allat::find($a_id);


        // a return megmutatja azt az id-t, amit megtaláltam
        return view('bevall.show', compact('allat'));
          
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


    


