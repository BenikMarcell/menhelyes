<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Faj;

class tipusController extends Controller
{
    public function index(){
        $fajok = Faj::paginate(3);
        return view("fajfelvetel",["fajok" => $fajok]);
    }
    
    public function store(Request $req){
           #validáljuk
      $minimumKarakter = 2;
      $req->validate(
        [
           "faj" => "required|alpha|lowercase|unique:fajok,faj|min:".$minimumKarakter."|max:30"
        ],
        [
           "faj.required" => "A mező kitöltése kötelező!",
           "faj.unique" => "Ez a faj már létezik az adatbázisban!",
           "faj.min" => "Minimum ".$minimumKarakter." karaktert adj meg!",
           "faj.max" => "Maximum 30 karaktert adhatsz meg!",
           "faj.alpha" => "Csak betűket lehet beírni",
           "faj.lowercase" => "Csak kisbetűket lehet beírni!"
        ]
     );
     #adatbázisba rögzítés modellt használva
     Faj::create([
        "faj" => $req->get("faj")
     ]);

     #visszairányítjuk a felhasználót, egy kész sessionsel
     return back()->with("success","A faj rögzítése sikeres!");
    }
    public function tipusTorlesMegerosites(Request $req){
      $data['modal-title'] = "Faj Törlés";
      $data['modal-body'] = "Biztosan törölni szeretnéd az adott fajt?";
      $data['modal-footer'] = '<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Mégsem</button>';
      $data['modal-footer'] .= '<button type="button" class="btn btn-danger" onclick="fajTorles('.$req->af_id.');">Törlés</button>';
      
      return response()->json($data);
    }
    public function fajTorles(Request $req){
      $data['error'] = false;
      $data['errorMsg'] = "";

      $validalas = Validator::make($req->all(),
      [
         "af_id" => "required|exists:tipusok,t_id"
      ],
      [
         "af_id.required" => "Mező kitöltése kötelező!",
         "af_id.exists" => "Nem létező ID."
      ]
      );
      if($validalas->fails()){
         $data['error'] = true;
         $data['errorMsg'] = $validalas->messages();
     }else{
         DB::delete("DELETE FROM fajok WHERE af_id=?",[$req->af_id]);
     }
     return response()->json($data);   
}
}
