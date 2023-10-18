<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use App\Models\Szin;
use App\Models\Allat;
use App\Models\Menhely;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AllatokController extends Controller
{

    public function lista()
{
    $allatok = Allat::all();
    

    return view('welcome', ["allatok" => $allatok]);
}


    

public function allatIndex()
{
    
    
    $allatok = Allat::all();
    
    return view('menhelyAllatai', ["allatok" => $allatok]);
}

}
