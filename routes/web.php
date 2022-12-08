<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswasController;

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

/*Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswasController@index');
Route::get('/mahasiswa/{mahasiswa}', 'App\Http\Controllers\MahasiswasController@show');
Route::get('/tambahdata', 'App\Http\Controllers\MahasiswasController@tambahdata');
Route::post('/tambahmhs', [MahasiswasController::class, 'tambahmhs'])->name('tambahmhs');
Route::get('/edit/{NIM}', [MahasiswasController::class, 'edit'])->name('edit');
Route::post('/update/{NIM}', [MahasiswasController::class, 'update'])->name('update');
Route::get('/delete/{NIM}', [MahasiswasController::class, 'delete'])->name('delete');
// Route::get('/delete/[id]', 'App\Http\Controllers\MahasiswasController@delete');
