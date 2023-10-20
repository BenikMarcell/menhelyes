<?php

namespace App\Http\Controllers;

use App\Models\Faj;
use App\Models\Szin;
use App\Models\Allat;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class AllatokController extends Controller
{
    public function lista()
{
    
    
    $allatok = Allat::all();
    
    return view('welcome', ["allatok" => $allatok]);
}

public function allatIndex()
{
    
    
    $allatok = Allat::Paginate(5);
    
    return view('menhelyAllatai', ["allatok" => $allatok]);
}

}
