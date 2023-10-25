<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllatokController;
use App\Http\Controllers\FajokController;
use App\Http\Controllers\KepekController;
use App\Http\Controllers\MenhelyekController;
use App\Http\Controllers\SzinekController;
use App\Http\Controllers\BarionController;

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
Route::get('/allat/{id}/kep', [AllatokController::class, 'kartyaKep'])->name('allat.image');
Route::get('/', [MenhelyekController::class, 'menhelyLista'])->name('menhelyLista');
Route::get('menhelyAllatai', [AllatokController::class, 'allatIndex'])->name('allatIndex');

Route::get('/menhelyAllatai',[MenhelyekController::class,'menhelyAllataiLista'])->name('menhelyAllatai');
Route::get('/menhelyek', [MenhelyekController::class, 'menhelyListaMenhelyek'])->name('menhelyListaMenhelyek');

Route::get('/egyMenhely/{m_id}', [MenhelyekController::class, 'egyMenhely'])->name('egyMenhely');
Route::get('/egyAllat/{a_id}', [AllatokController::class, 'egyAllat'])->name('egyAllat');

Route::get('/menhelyek/{telepules}', [MenhelyekController::class, 'menhelyekByTelepules'])->name('menhelyekByTelepules');

Route::post('/menhelyek/kereses', [MenhelyekController::class, 'kereses'])->name('menhelyekKereses');
Route::get('/megkeresettMenhely/{m_id}', [MenhelyekController::class, 'kereses'])->name('kereses');
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

Route::get('/allatregisztracio', function () {
    return view('allatregisztracio');
})->name('allatregisztracio');
Route::get('/menhelyregisztracio', function () {
    return view('menhelyregisztracio');
})->name('menhelyregisztracio');
Route::get('/kepregisztracio', function () {
    return view('kepregisztracio');
});
Route::get('/allatok', function () {
    return view('allatok');
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

