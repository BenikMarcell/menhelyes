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
    Log::info('lista metódus meghív');
    
    $allatok = Allat::all();
    dd($allatok); 
    return view('welcome', ["allatok" => $allatok]);
}

}
