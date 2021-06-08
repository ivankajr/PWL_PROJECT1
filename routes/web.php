<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HewanController;

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
    return view('welcome');
});

Route::get('home', function(){
    return view('home');
});

Route::get('dokter', 'App\Http\Controllers\DokterController@data');
Route::get('dokter/add', 'App\Http\Controllers\DokterController@add');
Route::post('dokter', 'App\Http\Controllers\DokterController@addProcess');
Route::get('dokter/edit/{id_dokter}', 'App\Http\Controllers\DokterController@edit');
Route::patch('dokter/{id_dokter}', 'App\Http\Controllers\DokterController@editProcess');
Route::delete('dokter/{id_dokter}', 'App\Http\Controllers\DokterController@delete');

Route::resource('hewan','App\Http\Controllers\HewanController');
Route::resource('jenishewan','App\Http\Controllers\JenisHewan');
Route::resource('pemilik','App\Http\Controllers\PemilikController');
Route::resource('obat','App\Http\Controllers\ObatController');
