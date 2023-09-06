<?php

namespace App\Http\Controllers;

use App\Models\Allat;
use Illuminate\Http\Request;

class AllatokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allatok = Allat::all();
        return view('menhelyek.index', compact('menhelyek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('allatok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'kor'=>'required',
            'ivar_allapot'=>'required',
            'nev'=>'required|min:3|max:100',
            'nem'=>'required',
            'chip '=>'required',
            'leiras'=>'required|min:10',
 
        ],

      [
                
                "kor.required" => "A mező kitöltése kötelező!",

                "ivar_allapot.required" => "A mező kitöltése kötelező!",

                "nev.required" => "A mező kitöltése kötelező!",
                "nev.min" => "Minimum 3 karaktert adj meg!",
                "nev.max" => "Maximum 100 karaktert adhatsz meg!", 
                
                "nem.required" => "A mező kitöltése kötelező!",

                "chip.min" => "A mező kitöltése kötelező!",

                "leiras.required" => "A mező kitöltése kötelező!",
                "leiras.min" => "Minimum 10 karaktert adj meg!",
  
        ]);  
        
        $allat = new Allat();
        $allat->kor =$request->kor;
        $allat->ivar_allapot =$request->ivar_allapot;
        $allat->nev =$request->nev;
        $allat->nem =$request->nem;
        $allat->chip =$request->chip;
        $allat->leiras =$request->leiras;
        

        $allat->save();
        
        return redirect()->route('menhelyek.index')->with('success', 'Menhely sikeresen létrehozva.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
