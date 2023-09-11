<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use Illuminate\Http\Request;

class FajokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fajok = Faj::all();
        return view('fajok.index', compact('fajok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fajok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            
            'faj'=>'required|min:3|max:20',
            
  
        ]);  
        
        $faj = new Faj();
        $faj->faj =$request->faj;
        
        $faj->save();
        
        return redirect()->route('fajok.index')->with('success', 'A faj sikeresen mentve.');
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
    public function edit(string $af_id)
    {
        $faj = faj::find($af_id);

        return view('fajok.edit', compact('faj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $af_id)
    {
        $request->validate([

            
            'faj'=>'required|min:3|max:20',
            
  
        ]);  

        $faj = faj::find($af_id);
        $faj->faj =$request->faj;

        $faj->save();
        
        return redirect()->route('fajok.index')->with('success', 'A faj sikeresen szerkesztve.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $af_id)
    {
        $faj = faj::find($af_id);
        $faj->delete();
        return redirect()->route('fajok.index')->with('success', 'A faj sikeresen törölve.');
    }
}
