<?php

namespace App\Http\Controllers;
use App\Models\Allat;
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
    public function create(Request $request)
    {

        $pendingAnimalId = $request->input('a_id');

        // Az "Allat" modellből lekérjük az állat adatait a kapott "a_id" alapján
        $allat = Allat::find($pendingAnimalId);
        
        return view('kepek.create', compact('allat', 'pendingAnimalId'));

       // return view('kepek.create', compact('pendingAnimalId'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([

            'a_id'=>'required',
            'kep_cim'=>'required|min:3|max:100',
            'src'=>'required',
            'alt'=>'required|min:3|max:100',
            'leiras'=>'required|min:3',
            
           
        ],

      [


                "a_id.required" => "A mező kitöltése kötelező 1-4!",

                "kep_cim.required" => "A mező kitöltése kötelező!",
                "kep_cim.min" => "Minimum 3 karaktert adj meg!",
                "kep_cim.max" => "Maximum 100 karaktert adhatsz meg!", 
                
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
       

        

       
      
        $kep = new Kep();
        $kep->a_id = $request->a_id;
        $kep->kep_cim =$request->kep_cim;
        $kep->src = $ujSrc;
        $kep->alt =$request->alt;
        $kep->leiras =$request->leiras;
        $kep->save();
      
        $allatok = Allat::paginate(5);

        return redirect()->route('ujAllat', ['a_id' => $request->a_id]);
        //return view('menhelyAllatai', ['allatok' => $allatok]);
        
        //return redirect()->route('kepek.index')->with('success', 'Kép sikeresen mentve.');
    }

    public function ujAllat($a_id)
{
    // Az "Allat" modellből lekérjük az állat adatait az "a_id" alapján
    $allat = Allat::find($a_id);

    // Az "Allat" modellből lekérjük a hozzárendelt képet az "a_id" alapján
    $kep = Kep::where('a_id', $a_id)->first();

    return view('ujAllat', compact('allat', 'kep'));
}


    /**
     * Display the specified resource.
     */
    public function show(string $ak_id)
    {
        //a find itt megkeresi a kijelölt id-t, amit meg akarok mutatni
        $kep = kep::find($ak_id);

        // a return megmutatja azt az id-t, amit megtaláltam
        return view('kepek.show', compact('kep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ak_id)
    {
        $kep = kep::find($ak_id);

        return view('kepek.edit', compact('kep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ak_id)
    {
        $request->validate([

            'a_id'=>'required',
            'kep_cim'=>'required|min:3|max:100',
            'src'=>'required',
            'alt'=>'required|min:3|max:100',
            'leiras'=>'required|min:3',
            
           
        ],

      [


                "a_id.required" => "A mező kitöltése kötelező 1-4!",

                "kep_cim.required" => "A mező kitöltése kötelező!",
                "kep_cim.min" => "Minimum 3 karaktert adj meg!",
                "kep_cim.max" => "Maximum 100 karaktert adhatsz meg!", 
                
                "src.required" => "A mező kitöltése kötelező!",
                

                "alt.required" => "A mező kitöltése kötelező!",
                "alt.min" => "Minimum 3 karaktert adj meg!",
                "alt.max" => "Maximum 100 karaktert adhatsz meg!",  

                "leiras.required" => "A mező kitöltése kötelező!",
                "leiras.min" => "Minimum 3 karaktert adj meg!",

               
                
                
        ]);   
        
      

        $kep = kep::find($ak_id);
        $kep->a_id =$request->a_id;
        $kep->kep_cim =$request->kep_cim;
        $kep->src =$request->src;
        $kep->alt =$request->alt;
        $kep->leiras =$request->leiras;
        

        $kep->save();
        
        return redirect()->route('kepek.index')->with('success', 'Kép sikeresen szerkesztve.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ak_id)
    {
        $kep = kep::find($ak_id);
        $kep->delete();
        return redirect()->route('kepek.index')->with('success', 'Kép sikeresen törölve.');
    }
}
