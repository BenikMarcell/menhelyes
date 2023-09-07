<?php

namespace App\Http\Controllers;

use App\Models\Kep;
use Illuminate\Http\Request;

class KepekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kepek = Kep::all();
        return view('kepek.index', compact('kepek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kepek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'kep_cim'=>'required|min:3|max:20',
            'alt'=>'required|min:3|max:20',
            'leiras'=>'required|min:3',
            
           
        ],

      [
                
                "kep_cim.required" => "A mező kitöltése kötelező!",
                "kep_cim.min" => "Minimum 3 karaktert adj meg!",
                "kep_cim.max" => "Maximum 20 karaktert adhatsz meg!", 
                
                "alt.required" => "A mező kitöltése kötelező!",
                "alt.min" => "Minimum 3 karaktert adj meg!",
                "alt.max" => "Maximum 20 karaktert adhatsz meg!",  

                "leiras.required" => "A mező kitöltése kötelező!",
                "leiras.min" => "Minimum 3 karaktert adj meg!",

               
                
                
        ]);   
        
      

        $kep = new Kep();
        $kep->kep_cim =$request->kep_cim;
        $kep->src =$request->src;
        $kep->alt =$request->alt;
        $kep->leiras =$request->leiras;
        

        $kep->save();
        
        return redirect()->route('kepek.index')->with('success', 'Kép sikeresen mentve.');
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
