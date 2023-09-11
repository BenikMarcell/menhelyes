<?php

namespace App\Http\Controllers;

use App\Models\Menhely;
use Illuminate\Http\Request;

class MenhelyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menhelyek = Menhely::all();
        return view('menhelyek.index', compact('menhelyek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menhelyek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nev'=>'required|min:3|max:200',
            'irsz'=>'required|min:4|max:20',
            'telepules'=>'required|min:3|max:200',
            'utca_hsz'=>'required|min:3|max:200',
            'bankszamla_sz'=>'required|min:3|max:100',
            'nyilv_szam'=>'required|min:3|max:200',
            'adoszam'=>'required|min:3|max:200',
            'email'=>'required|email',
            'telefon'=>'required|numeric',
            'menhely_leiras'=>'required|min:3',
            'weblink'=>'required|url'
           
        ],

      [
                
                "nev.required" => "A mező kitöltése kötelező!",
                "nev.unique" => "Ez a név már fel lett véve!",
                "nev.min" => "Minimum 3 karaktert adj meg!",
                "nev.max" => "Maximum 200 karaktert adhatsz meg!", 
                
                "irsz.required" => "A mező kitöltése kötelező!",
                "irsz.min" => "Minimum 3 karaktert adj meg!",
                "irsz.max" => "Maximum 20 karaktert adhatsz meg!",  

                "telepules.required" => "A mező kitöltése kötelező!",
                "telepules.min" => "Minimum 3 karaktert adj meg!",
                "telepules.max" => "Maximum 200 karaktert adhatsz meg!", 

                "utca_hsz.required" => "A mező kitöltése kötelező!",
                "utca_hsz.min" => "Minimum 3 karaktert adj meg!",
                "utca_hsz.max" => "Maximum 200 karaktert adhatsz meg!", 
           
                "bankszamla_sz.required" => "A mező kitöltése kötelező!",
                "bankszamla_sz.min" => "Minimum 3 karaktert adj meg!",
                "bankszamla_sz.max" => "Maximum 100 karaktert adhatsz meg!",

                "nyilv_szam.required" => "A mező kitöltése kötelező!",
                "nyilv_szam.min" => "Minimum 3 karaktert adj meg!",
                "nyilv_szam.max" => "Maximum 200 karaktert adhatsz meg!", 

                "adoszam.required" => "A mező kitöltése kötelező!",
                "adoszam.min" => "Minimum 3 karaktert adj meg!",
                "adoszam.max" => "Maximum 100 karaktert adhatsz meg!",

                "email.required" => "A mező kitöltése kötelező!",
                

                "telefon.required" => "A mező kitöltése kötelező!",
                "telefon.numeric" => "A csak számok írhatóak!",
                

                "menhely_leiras.required" => "A mező kitöltése kötelező!",
                "menhely_leiras.min" => "Minimum 3 karaktert adj meg!",

                "weblink.required" => "A mező kitöltése kötelező!",
                
                
        ]);   
        
      

        $menhely = new Menhely();
        $menhely->nev =$request->nev;
        $menhely->irsz =$request->irsz;
        $menhely->telepules =$request->telepules;
        $menhely->utca_hsz =$request->utca_hsz;
        $menhely->bankszamla_sz =$request->bankszamla_sz;
        $menhely->nyilv_szam =$request->nyilv_szam;
        $menhely->adoszam =$request->adoszam;
        $menhely->email =$request->email;
        $menhely->telefon =$request->telefon;
        $menhely->menhely_leiras =$request->menhely_leiras;
        $menhely->weblink =$request->weblink;

        $menhely->save();
        
        
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
