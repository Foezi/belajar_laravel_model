<?php

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

Route::get('/', 'ControllerMahasiswa@index');
Route::get('/detail/{mahasiswa}', 'ControllerMahasiswa@show');
Route::delete('/hapus/{mahasiswa}', 'ControllerMahasiswa@destroy');
Route::get('/tambahMahasiswa', 'ControllerMahasiswa@create');
Route::post('/proseTambahMahasiswa', 'ControllerMahasiswa@store');
