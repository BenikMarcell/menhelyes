<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllatokController;
use App\Http\Controllers\FajokController;
use App\Http\Controllers\KepekController;
use App\Http\Controllers\MenhelyekController;
use App\Http\Controllers\SzinekController;
use App\Http\Controllers\BarionController;
use App\Http\Controllers\menhelyKepekController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// KG routok kezdete -----------------------------------------------------------------------------------------

//Állat kártyán a kép
Route::get('/allat/{id}/kep', [AllatokController::class, 'kartyaKep'])->name('allat.image');
//Menhely kártyán a kép
Route::get('/menhely/{id}/kep', [MenhelyekController::class, 'menhelyKep'])->name('menhely.image');
//a kártyák: állatok és menhelyek
Route::get('/', [MenhelyekController::class, 'menhelyLista'])->name('menhelyLista');
// allatok oldalra kártyákban megjelenteti az állatokat
Route::get('/allatok', [AllatokController::class,'allatokLista'])->name('allatokLista');
// Egy állat adatai
Route::get('/egyAllat/{a_id}', [AllatokController::class, 'egyAllat'])->name('egyAllat');

Route::get('/ujAllat/{a_id}', [KepekController::class, 'ujAllat'])->name('ujAllat');

Route::get('/menhelyek', [MenhelyekController::class, 'menhelyListaMenhelyek'])->name('menhelyListaMenhelyek');

Route::get('/egyMenhely/{m_id}', [MenhelyekController::class, 'egyMenhely'])->name('egyMenhely');

Route::get('/menhelyek/{telepules}', [MenhelyekController::class, 'menhelyekByTelepules'])->name('menhelyekByTelepules');

Route::post('/menhelyek/kereses', [MenhelyekController::class, 'kereses'])->name('menhelyekKereses');
Route::get('/megkeresettMenhely/{m_id}', [MenhelyekController::class, 'kereses'])->name('kereses');

Route::get('allatregisztracio', [AllatokController::class, 'create'])->name('create');
Route::get('menhelyAllatai', [AllatokController::class, 'index'])->name('menhelyAllatai');
Route::resource('menhelykepek', MenhelyKepekController::class);


//Route::get('kepek/create', 'KepekController@create')->name('kepek.create');

Route::get('kepek/create', [KepekController::class, 'create'])->name('kepek.create');
// Ezeket átdolgozni, a Tanár kérése szerint!
Route::resource('fajok', FajokController::class);
Route::resource('szinek', SzinekController::class);
Route::resource('bevmen', MenhelyekController::class);
Route::resource('bevall', AllatokController::class);
Route::resource('kepek', KepekController::class);

// KG routok vége ----------------------------------------------------------------------------------





Route::get('/fooldal', function () {
    return view('welcome');
});
Route::get('/kapcsolat', function () {
    return view('kapcsolat');
});
Route::get('/gyik', function () {
    return view('gyik');
});




Route::get('/tamogatoiProfil', function () {
    return view('tamogatoiProfil');
});

Route::get('/menhelyProfil', function () {
    return view('menhelyProfil');
})->name('menhelyProfil');

Route::get('/allatTorles', function () {
    return view('allatTorles');
})->name('allatTorles');



Route::get('/menhelyAdomanyai',[BarionController::class,"lista"])->name('menhelyAdomanyai');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

