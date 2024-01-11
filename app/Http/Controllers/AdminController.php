<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menhely;

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
        $data['modal-footer'] .= '<button type="button" class="btn btn-danger" onclick="torles(' . $req->m_id . ');">Törlés</button>';

        return response()->json($data);

    }
    public function menhelyTorles(Request $req)
    {
        $data['error'] = false;
        $data['errorMsg'] = "";

        DB::delete("DELETE FROM menhely WHERE m_id=?", [$req->m_id]);
        DB::delete("DELETE FROM users WHERE id=?", [$req->m_id]);
        DB::delete("DELETE FROM allat WHERE m_id=?", [$req->m_id]);


        return response()->json($data);
    }

    // MakeAdminMegerosites
    public function makeAdminEllenorzes(Request $req)
    {
        $data['modal-header'] = 'Adminisztrátori jogok';
        $data['modal-body'] = 'Ha továbblép azzal adminisztrátori jogokkal ruházza fel a kiválasztott felhasználót. Biztosan ezt kívánja tenni?';
        $data['modal-footer'] = '<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Mégse</button>';
        $data['modal-footer'] .= '<button type="button" class="btn btn-danger" onclick="makeAdmin(' . $req->m_id . ');">Igen</button>';

        return response()->json($data);

    }
    //Make admin
    public function makeAdmin(Request $req)
    {
        $data['error'] = false;
        $data['errorMsg'] = "";
        $data['ujType'] = 1;
        DB::update("UPDATE users SET type = '1' WHERE id=?", [$req->m_id]);
        

        return response()->json($data);
    }
}
