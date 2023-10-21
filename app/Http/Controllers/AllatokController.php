<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use App\Models\Szin;
use App\Models\Allat;
use App\Models\Menhely;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AllatokController extends Controller
{

    public function lista()
{
    $allatok = Allat::all();
    

    return view('welcome', ["allatok" => $allatok]);
}


    

public function allatIndex()
{
    
    
    $allatok = Allat::all();
    
    return view('menhelyAllatai', ["allatok" => $allatok]);
}


public function index()
    {
        $allatok = Allat::all();
        return view('bevall.index', compact('allatok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fajok = Faj::all();
        $szinek = Szin::all();

        return view('bevall.create', compact('fajok', 'szinek'));
    }

    

       

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            
            'nev'=>'required|min:3|max:100',
            
            'af_id '=>'required',

            /*
            'ivar_allapot'=>'required',
            
            'nem'=>'required',
            'chip '=>'required',
            'leiras'=>'required|min:3',*/
 /*
        ],

      [
        "nev.required" => "A mező kitöltése kötelező!",
                "nev.min" => "Minimum 3 karaktert adj meg!",
                "nev.max" => "Maximum 100 karaktert adhatsz meg!", 
                
                "kor.required" => "A mező kitöltése kötelező!",

                "ivar_allapot.required" => "A mező kitöltése kötelező!",

                
                
                "nem.required" => "A mező kitöltése kötelező!",

                "chip.min" => "A mező kitöltése kötelező!",

                "leiras.required" => "A mező kitöltése kötelező!",
                "leiras.min" => "Minimum 10 karaktert adj meg!",*/
  
        ]);  
        
        $allat = new Allat();
        $allat->nev =$request->nev;
        $allat->af_id =$request->af_id;
       
        $allat->ivar_allapot =$request->ivar_allapot;
        $allat-> chip=$request->chip;
        $allat->kor =$request->kor;
        $allat->leiras =$request->leiras;
        
        
        $allat->save();
        
        return redirect()->route('bevall.index')->with('success', 'Állat sikeresen létrehozva.');
        
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
