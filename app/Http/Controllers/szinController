<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Szin;

class szinController extends Controller
{
   public function index(){
    #összes eddigi színt
    $szinek = Szin::paginate(30);
    return view('szinfelvetel',['szinek' => $szinek]);
   }

   public function store(Request $req){
      #validáljuk
      $req->validate(
         [
            "szin" => "required|alpha|lowercase|unique:szinek,szin|min:3|max:30"
         ],
         [
            "szin.required" => "A mező kitöltése kötelező!",
            "szin.unique" => "Ez a szín már fel van véve!",
            "szin.min" => "Minimum 3 karaktert adj meg!",
            "szin.max" => "Maximum 30 karaktert adhatsz meg!",
            "szin.alpha" => "Csak betűket lehet beírni",
            "szin.lowercase" => "Csak kisbetűket lehet beírni!"
         ]
      );
      #adatbázisba rögzítés modellt használva
      Szin::create([
         "szin" => $req->get("szin")
      ]);

      #visszairányítjuk a felhasználót, egy kész sessionsel
      return back()->with("success","A szín rögzítése sikeres!");
   }
   public function szinTorlesMegerosites(Request $req){
      $data['modal-title'] = "Szín Törlés";
      $data['modal-body'] = "Biztosan törölni szeretnéd az adott színt?";
      $data['modal-footer'] = '<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Mégsem</button>';
      $data['modal-footer'] .= '<button type="button" class="btn btn-danger" onclick="szinTorles('.$req->szin_id.');">Törlés</button>';
      
      return response()->json($data);
      
  }
   public function szinTorles(Request $req){
         $data['error'] = false;
         $data['errorMsg'] = "";

         $validalas = Validator::make($req->all(),
         [
            "szin_id" => "required|exists:szinek,szin_id"
         ],
         [
            "szin_id.required" => "Mező kitöltése kötelező!",
            "szin_id.exists" => "Nem létező ID."
         ]
         );
         if($validalas->fails()){
            $data['error'] = true;
            $data['errorMsg'] = $validalas->messages();
        }else{
            DB::delete("DELETE FROM szinek WHERE szin_id=?",[$req->szin_id]);
        }
        return response()->json($data);   
   }
}
