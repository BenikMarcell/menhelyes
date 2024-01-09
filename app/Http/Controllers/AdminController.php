<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('homeAdmin');
        
    }

    // menhelyTorlesMegerosites

    public function menhelyTorlesMegerosites(Request $req)
{
    $data['modal-header'] = 'Menhely és User Törlése';
    $data['modal-body'] = 'Biztosan törölni szeretnéd a menhelyet, a usert és a hozzá tartozó állatokat?';
    $data['modal-footer'] = '<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Mégse</button>';
    $data['modal-footer'] .= '<button type="button" class="btn btn-danger">Törlés</button>';

    return response() ->json($data);
    
}    
}
