<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barion;

class BarionController extends Controller
{
    public function lista(){

        $lista = Barion::paginate(5);
        return view('menhelyAdomanyai' , ["adomanyok" => $lista]);
    }
}
