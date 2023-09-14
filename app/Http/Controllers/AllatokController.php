<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use App\Models\Szin;
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
        return view('bevitel_allatok.index', compact('allatok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fajok = Faj::all();
        $szinek = Szin::all();

        return view('bevitel_allatok.create', compact('fajok', 'szinek'));
    }

    

       

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([

            
            'nev'=>'required|min:3|max:100',
            'faj'=>'required',
            'szin'=>'required',
            'kor'=>'required',
            'leiras'=>'required',
            'chip'=>'required',
            'ivar_allapot'=>'required',
            'nem'=>'required'
 
        ]);  
        
        $allat = new Allat();
        $allat->nev =$request->nev;
        $allat->af_id =$request->faj;
        $allat->szin_id =$request->szin;
        $allat->m_id =$request->m_id;
        $allat->kor =$request->kor;
        $allat->leiras =$request->leiras;
        $allat-> nem=$request->nem;
        $allat->ivar_allapot =$request->ivar_allapot;
        $allat-> chip=$request->chip;

       
        
        $allat->save();
        
        return redirect()->route('bevitel_allatok.index')->with('success', 'Állat sikeresen létrehozva.');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $a_id)
    {
        //a find itt megkeresi a kijelölt id-t, amit meg akarok mutatni
        $allat = allat::find($a_id);
       

        // a return megmutatja azt az id-t, amit megtaláltam
        return view('bevitel_allatok.show', compact('allat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $m_id)
    {
        $allat = allat::find($m_id);
        $fajok = Faj::all();
        $szinek = Szin::all();

        return view('bevitel_allatok.edit', compact('allat','fajok', 'szinek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $m_id)
    {
        //dd($request->all());
        $request->validate([

            
            'nev'=>'required|min:3|max:100',
            'faj'=>'required',
            'szin'=>'required',
            'kor'=>'required',
            'leiras'=>'required',
            'chip'=>'required',
            'ivar_allapot'=>'required',
            'nem'=>'required'
            

           
  
        ]);  
        
        $allat = allat::find($m_id);
        $allat->nev =$request->nev;
        $allat->af_id =$request->faj;
        $allat->szin_id =$request->szin;
        $allat->m_id =$request->m_id;
        $allat->kor =$request->kor;
        $allat->leiras =$request->leiras;
        $allat-> nem=$request->nem;
        $allat->ivar_allapot =$request->ivar_allapot;
        $allat-> chip=$request->chip;
        
        $allat->save();
        
        return redirect()->route('bevitel_allatok.index')->with('success', 'Állat sikeresen létrehozva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $m_id)
    {
        $allat = allat::find($m_id);
        $allat->delete();
        return redirect()->route('bevitel_allatok.index')->with('success', 'Állat sikeresen létrehozva.');
    }
}
