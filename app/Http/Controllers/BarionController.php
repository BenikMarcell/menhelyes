<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barion;
use App\Models\Menhely;

class BarionController extends Controller
{
    public function lista(){

        $u_id = auth()->user()->id;
        $menhely = Menhely::where('u_id', $u_id)->first();
        $lista = [];
        if ($menhely) {
            $lista = Barion::where('m_id' , $menhely->m_id)->paginate(5);
        }
        return view('menhelyAdomanyai' , ["adomanyok" => $lista]);
    }
}
