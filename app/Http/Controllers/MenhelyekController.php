<?php

namespace App\Http\Controllers;

use App\Models\Kep;
use App\Models\Allat;
use App\Models\Menhely;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MenhelyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
     public function menhelyLista() // welcome oldalon a kártyák: állatok és menhelyek
     {
         $menhelyek = Menhely::inRandomOrder()->limit(4)->get();
         $allatok = Allat::inRandomOrder()->limit(4)->get();
         $kepek = Kep::all();
     
         return view('welcome', ["menhelyek" => $menhelyek, "allatok" => $allatok, "kepek" => $kepek]);
     }

          
     public function menhelyListaMenhelyek()  //menhelyek oldalon kilistázza a menhelyeket, előtte megszámolja mennyi van egy településen
     {
        $menhelyek = Menhely::all();

        $telepulesek = Menhely::select('telepules', DB::raw('count(*) as count'))
        ->groupBy('telepules')
        ->orderBy('telepules', 'asc')
        ->get();
     
         return view('menhelyek', ["menhelyek" => $menhelyek, "telepulesek" => $telepulesek]);
     }

     // A menhelyek települések szerint
     public function menhelyekByTelepules($telepules)
{
    $menhelyek = Menhely::where('telepules', $telepules)->get();
    return view('menhelyekbytelepules', compact('menhelyek', 'telepules'));
}

   public function egyMenhely($m_id)
{
    $menhely = Menhely::find($m_id);
    return view('egyMenhely', ['menhely' => $menhely]);
}

// Menhely keresés függvény a gombra
public function kereses(Request $request)
{
    $kereses = $request->input('nev');
    
    $menhelyek = Menhely::where('nev', 'like', '%' . $kereses . '%')->get();

    return view('megkeresettMenhely', ['menhelyek' => $menhelyek]);
}
public function menhelyKep(string $m_id)
{
    $menhely = Menhely::find($m_id);
    
    if ($menhely && $menhely->kep) {
        $image = $menhely->kep;
        return view('welcome', compact('menhely', 'image'));
    }
    $error = 'Kép nem található';
    return view('welcome', compact('menhely', 'error'));
    
}
     
     
     



    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $menhelyek = Menhely::all();
        return view('menhelyIndex', compact('menhelyek'));
    }

    public function create()
    {
        $menhelyek = Menhely::all();
        return view('menhelyregisztracio', compact('menhelyek'));
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
            'weblink'=>'required'
           
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
        
        
        return redirect()->route('bevmen.index')->with('success', 'Menhely sikeresen létrehozva.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $m_id)
    {
        //a find itt megkeresi a kijelölt id-t, amit meg akarok mutatni
        $menhely = menhely::find($m_id);

        // a return megmutatja azt az id-t, amit megtaláltam
        return view('bevmen.show', compact('menhely'));
    }

    /**
     * Show the form for editing the specified resource.
     * && auth()->user()->type === 0
     * Az edit hibára fut ha a usernek nincs még regisztrált menhelye
     */


     public function edit()
{
    if (auth()->check() && auth()->user()) {
        $email = auth()->user()->email;
        
        $menhely = Menhely::where('email', $email)->first();  // a bejelentkezett alapján itt találom meg a menhelyet

        // Most kinyerheted az m_id-t a megtalált menhely rekordból
        $m_id = $menhely->m_id;

        //return view('menhelyregisztracio', compact('menhely', 'm_id'));
        return view('menhelyszerkesztes', compact('menhely', 'm_id'));
    } else {
        $error = 'Menhely nem található';
    }
}
/**
     * Ez egy másik edit, ami az m_id-t a sorból kapja
     */
public function editAdmin($m_id)
{     
        $menhely = Menhely::Find($m_id);  
        return view('menhelyszerkesztes', compact('menhely', 'm_id'));
    
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $m_id)

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
                "weblink.url" => "A  linknek valósnak kell lenni!",
                
                
        ]);          


        $menhely = menhely::find($m_id);
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
        
        
        return redirect()->route('menhelyProfil')->with('success', 'Menhely sikeresen szerkesztve.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $m_id)
    {
        $menhely = menhely::find($m_id);
        $menhely->delete();
        return redirect()->route('bevmen.index')->with('success', 'Menhely sikeresen törölve.');
    }



}
