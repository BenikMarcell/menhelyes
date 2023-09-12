<?php

namespace App\Http\Controllers;

use App\Models\Szin;
use Illuminate\Http\Request;

class SzinekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $szinek = Szin::all();
        return view('szinek.index', compact('szinek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('szinek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            
            'szin'=>'required|min:2|max:100',
            
  
        ]);  
        
        $szin = new Szin();
        $szin->szin =$request->szin;
        
        $szin->save();
        
        return redirect()->route('szinek.index')->with('success', 'Szín sikeresen mentve.');
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
    public function edit(string $szin_id)
    {
        $szin = szin::find($szin_id);

        return view('szinek.edit', compact('szin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $szin_id)
    {
        $request->validate([

            
            'szin'=>'required|min:3|max:100',
            
  
        ]);  

        $szin = szin::find($szin_id);
        $szin->szin =$request->szin;

        $szin->save();
        
        return redirect()->route('szinek.index')->with('success', 'A szin sikeresen szerkesztve.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $szin_id)
    {
        $szin = szin::find($szin_id);
        $szin->delete();
        return redirect()->route('szinek.index')->with('success', 'A szin sikeresen szerkesztve.');
    }
}
