<?php

namespace App\Http\Controllers;

use App\Models\Menhely;
use App\Models\MenhelyKep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenhelyKepekController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && auth()->user()->type === 2) {
            $email = auth()->user()->email;
            $menhely = Menhely::where('email', $email)->first();  // itt találom meg a menhelyet
    
            // Most kinyerheted az m_id-t a megtalált menhely rekordból
            $m_id = $menhely->m_id;
            $kepek = MenhelyKep::where('m_id', $m_id)->get();
            return view('menhelykepek.index', compact('kepek'));
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    if (auth()->check() && auth()->user()->type === 2) {
        $email = auth()->user()->email;
        $menhely = Menhely::where('email', $email)->first();
        
        // Most kinyerheted az m_id-t a megtalált menhely rekordból
        $m_id = $menhely->m_id;

        return view('menhelykepek.create', compact('m_id'));
    }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([

            'm_id'=>'required',
            'kepCim'=>'required|min:3|max:100',
            'src'=>'required',
            'alt'=>'required|min:3|max:100',
            'leiras'=>'required|min:3',
            
           
        ],

      [


                "m_id.required" => "A mező kitöltése kötelező 1-4!",

                "kepCim.required" => "A mező kitöltése kötelező!",
                "kepCim.min" => "Minimum 3 karaktert adj meg!",
                "kepCim.max" => "Maximum 100 karaktert adhatsz meg!", 
                
                "src.required" => "A mező kitöltése kötelező!",
                

                "alt.required" => "A mező kitöltése kötelező!",
                "alt.min" => "Minimum 3 karaktert adj meg!",
                "alt.max" => "Maximum 100 karaktert adhatsz meg!",  

                "leiras.required" => "A mező kitöltése kötelező!",
                "leiras.min" => "Minimum 3 karaktert adj meg!",

               
                
                
        ]);   
        // fájl neve
        $ujSrc = date('YmdHis').".".$request->src->extension();
        // ahova elmentjük
        $request->src->storeAs('public/images', $ujSrc);
       

        

        
      
        $kep = new MenhelyKep();
        $kep->m_id =$request->m_id;
        $kep->kepCim =$request->kepCim;
        $kep->src = $ujSrc;
        $kep->alt =$request->alt;
        $kep->leiras =$request->leiras;
        $kep->save();
      
        
        
        
        return redirect()->route('menhelykepek.index')->with('success', 'Kép sikeresen mentve.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $mk_id)
    {
        //a find itt megkeresi a kijelölt id-t, amit meg akarok mutatni
        $kep = MenhelyKep::find($mk_id);

        // a return megmutatja azt az id-t, amit megtaláltam
        return view('menhelykepek.show', compact('kep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $mk_id)
{
    $kep = MenhelyKep::find($mk_id);
    
    if (auth()->check() && auth()->user()->type === 2) {
        $email = auth()->user()->email;
        $menhely = Menhely::where('email', $email)->first();
        
        // Most kinyerheted az m_id-t a megtalált menhely rekordból
        $m_id = $menhely->m_id;

        return view('menhelykepek.edit', compact('kep', 'm_id'));
    }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $mk_id)
    {
        $request->validate([
            

            'm_id'=>'required',
            'kepCim'=>'required|min:3|max:100',
            //'src'=>'required',
            'alt'=>'required|min:3|max:100',
            'leiras'=>'required|min:3',
            
           
        ],

      [

                "m_id.required" => "A mező kitöltése kötelező 1-4!",

                "kepCim.required" => "A mező kitöltése kötelező!",
                "kepCim.min" => "Minimum 3 karaktert adj meg!",
                "kepCim.max" => "Maximum 100 karaktert adhatsz meg!", 
                
                //"src.required" => "A mező kitöltése kötelező!",
                

                "alt.required" => "A mező kitöltése kötelező!",
                "alt.min" => "Minimum 3 karaktert adj meg!",
                "alt.max" => "Maximum 100 karaktert adhatsz meg!",  

                "leiras.required" => "A mező kitöltése kötelező!",
                "leiras.min" => "Minimum 3 karaktert adj meg!",
            
        ]);  

        
        $kep = MenhelyKep::find($mk_id);
        
        $kep->m_id =$request->m_id;
        $kep->kepCim =$request->kepCim;
        //$kep->src = $request->src;
        $kep->alt =$request->alt;
        $kep->leiras =$request->leiras;
        
        $kep->save();
       // dd($request->all());
        return redirect()->route('menhelykepek.index')->with('success', 'Kép sikeresen szerkesztve.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $mk_id)
    {
        //dd('destroy metódus elérve');
        $kep = MenhelyKep::find($mk_id);
        $kep->delete();
        return redirect()->route('menhelykepek.index')->with('success', 'Kép sikeresen törölve.');
    }






}
