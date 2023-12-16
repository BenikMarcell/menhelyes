<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return to_route('homeAdmin');
    }

    // Ideiglenes controller a felhasználó kezelésnek
    public function userLista()
    {
        $users = DB::table('users')->paginate(2);
        return view('userLista', ["users"=> $users]);
        
    }
}
