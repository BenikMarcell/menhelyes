<?php

use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllatokController;
use App\Http\Controllers\FajokController;
use App\Http\Controllers\KepekController;
use App\Http\Controllers\MenhelyekController;
use App\Http\Controllers\SzinekController;
use App\Http\Controllers\BarionController;
use App\Http\Controllers\menhelyKepekController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\isAdminController;
use App\Http\Middleware\isAdminMiddleware;
use App\Http\Middleware\adminBTNMiddleware;


//Főoldal megjelenítése és hozzá a kártyák: állatok és menhelyek
Route::get('/', [MenhelyekController::class, 'menhelyLista'])->name('menhelyLista');

//-----------Állatok aloldalak
//Állat kártyán a kép
Route::get('/allat/{id}/kep', [AllatokController::class, 'kartyaKep'])->name('allat.image');

// allatok oldalra kártyákban megjelenteti az állatokat
Route::get('/allatok', [AllatokController::class,'allatokLista'])->name('allatokLista');

// Egy állat adatai
Route::get('/egyAllat/{a_id}', [AllatokController::class, 'egyAllat'])->name('egyAllat');

Route::get('/sajatAllat/{a_id}', [AllatokController::class, 'sajatAllat'])->name('sajatAllat');

Route::get('/ujAllat/{a_id}', [KepekController::class, 'ujAllat'])->name('ujAllat');

//Route::get('/allatKereses', [AllatokController::class,'allatKereses']);


//---------Menhelyek aloldal:
Route::get('/menhelyek', [MenhelyekController::class, 'menhelyListaMenhelyek'])->name('menhelyListaMenhelyek');

Route::get('/egyMenhely/{m_id}', [MenhelyekController::class, 'egyMenhely'])->name('egyMenhely');

Route::get('/menhelyek/{telepules}', [MenhelyekController::class, 'menhelyekByTelepules'])->name('menhelyekByTelepules');

// A menhelykeresés gomb POST
Route::post('/menhelyek/kereses', [MenhelyekController::class, 'kereses'])->name('menhelyekKereses');
// A megkeresett menhely aloldal megjelenítése
Route::get('/megkeresettMenhely/{m_id}', [MenhelyekController::class, 'kereses'])->name('kereses');
//Menhely kártyán a kép
Route::get('/menhely/{id}/kep', [MenhelyekController::class, 'menhelyKep'])->name('menhely.image');
//--------
Route::get('/allatregisztracio', [AllatokController::class, 'create'])->name('create');
//->middleware('menhely');


Route::get('/allatmodositas/{a_id}', [AllatokController::class, 'modify']);
//->middleware('menhely')
Route::get('menhelyAllatai', [AllatokController::class, 'index'])->name('menhelyAllatai');
Route::resource('menhelykepek', MenhelyKepekController::class);


Route::get('/menhely/edit', [MenhelyekController::class, 'edit'])->name('menhely.edit');
//Menhelyszerkesztés m-id
Route::get('/menhely/edit/{m_id}', [MenhelyekController::class, 'editAdmin'])->name('menhely.editAdmin');

Route::put('/menhely/update/{m_id}', [MenhelyekController::class, 'update'])->name('menhely.update');
Route::delete('/menhelykepek/{mk_id}', [MenhelyKepekController::class, 'destroy'])->name('menhelykepek.destroy');
Route::put('/menhelykepek/{mk_id}', [MenhelyKepekController::class, 'update'])->name('menhelykepek.update');


Route::get('kepek/create', [KepekController::class, 'create'])->name('kepek.create');

// Ezeket átdolgozni, a Tanár kérése szerint!
Route::resource('fajok', FajokController::class);
Route::resource('szinek', SzinekController::class);
Route::resource('bevmen', MenhelyekController::class);
Route::resource('bevall', AllatokController::class);
Route::resource('kepek', KepekController::class);
Route::resource('menhelykepek', MenhelyKepekController::class);


// Főoldal route
Route::get('/fooldal', function () {
    return view('welcome');
});
Route::get('/kapcsolat', function () {
    return view('kapcsolat');
})->name('kapcsolat');

Route::get('/gyik', function () {
    return view('gyik');
})->name('gyik');

Route::get('/hirlevel', function () {
    return view('hirlevel');
})->name('hirlevel');

//---------Menhely profil oldal
Route::get('/menhelyProfil', function () {
    return view('menhelyProfil');
})->name('menhelyProfil');



// Kontroller a felhasználó kezelésnek
Route::get('/userLista', [HomeController::class, "userLista"])->name('userLista')->middleware(adminBTNMiddleware::class);

//Modal routok
Route::post('/menhely-torles-megerosites', [AdminController::class, "menhelyTorlesMegerosites"]);
Route::post('/menhely-torles', [AdminController::class, "menhelyTorles"]);
Route::post('/make-Admin-Ellenorzes', [AdminController::class, "makeAdminEllenorzes"]);
Route::post('/make-Admin', [AdminController::class, "makeAdmin"]);


Route::get('/allatTorles/{a_id}', function () {
    return view('allatTorles');
});

Route::post('/allatTorles/{a_id}', [AllatokController::class,"destroy"]);

Route::get('/menhelyAdomanyai',[BarionController::class,"lista"])->name('menhelyAdomanyai');


Route::get('/menhelyregisztracio',[MenhelyekController::class,"create"])->name('menhelyRegisztracio');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware('isAdmin');

//hozzáadtam egy újabb Routot és egy AdminControllert
Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('homeAdmin')->middleware(isAdminMiddleware::class);

