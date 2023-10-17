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
Route::get('/', [AllatokController::class, 'lista'])->name('lista');
Route::get('/menhelyek', [MenhelyekController::class, 'menhelyLista'])->name('menhelyLista');
//Route::get('menhelyAllatai', [AllatokController::class, 'allatIndex'])->name('allatIndex');



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
});
Route::get('/kepregisztracio', function () {
    return view('kepregisztracio');
});
<<<<<<< HEAD
//Route::get('/menhelyek', function () {
  // return view('menhelyek');
// });
=======
>>>>>>> 09a88ed226b9e83171de036a06716a176fff551b
Route::get('/allatok', function () {
    return view('allatok');
});
Route::get('/egyMenhely', function () {
    return view('egyMenhely');
});
Route::get('/egyAllat', function () {
    return view('egyAllat');
});
Route::get('/tamogatoiProfil', function () {
    return view('tamogatoiProfil');
});
Route::get('/menhelyProfil', function () {
    return view('menhelyProfil');
})->name('menhelyProfil');

Route::get('/allatTorles', function () {
    return view('allatTorles');
});

Route::get('/menhelyAllatai',[MenhelyekController::class,'menhelyAllataiLista'])->name('menhelyAllatai');

Route::get('/menhelyAdomanyai',[BarionController::class,"lista"])->name('menhelyAdomanyai');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

