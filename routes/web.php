<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('kalkulator.kalkulator2');
});


Route::resource('hitung', ProsesController::class);
Route::get('kalkulator1',[ContenController::class, 'index']);
Route::get('kalkulator4',[ContenController::class, 'kalkulator4']);

