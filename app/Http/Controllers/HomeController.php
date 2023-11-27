<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.home');
        
    }

    // / Ideiglenes controller a felhasználó kezelésnek
    public function userLista()
    {
        $users = DB::table('users')->paginate(2);
        return view('userLista', ["users"=> $users]);
        
    }
}
