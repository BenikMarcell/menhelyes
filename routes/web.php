<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllatokController;
use App\Http\Controllers\MenhelyekController;
use App\Http\Controllers\SzinekController;

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

Route::resource('menhelyek', MenhelyekController::class);
Route::resource('allatok', AllatokController::class);
Route::resource('szinek', SzinekController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fooldal', function () {
    return view('fooldal');
});
Route::get('/kapcsolat', function () {
    return view('kapcsolat');
});
Route::get('/kapcsolat2', function () {
    return view('kapcsolat2');
});
Route::get('/gyik', function () {
    return view('gyik');
});
Route::get('/szerkesztesalatt', function () {
    return view('szerkesztesalatt');
});

Route::get('/menhelyregisztracio', function () {
    return view('menhelyregisztracio');
});
Route::get('/menkapcsolat', function () {
    return view('menkapcsolat');
});
Route::get('/mengyik', function () {
    return view('mengyik');
});
Route::get('/allatregisztracio', function () {
    return view('allatregisztracio');
});
Route::get('/szinregisztracio', function () {
    return view('szinregisztracio');
});
Route::get('/allatgyik', function () {
    return view('allatgyik');
});
Route::get('/allatkapcsolat', function () {
    return view('allatkapcsolat');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

