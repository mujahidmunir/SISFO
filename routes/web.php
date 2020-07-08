<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LayoutController@index');
Route::get('/daftar-guru','LayoutController@list_teacher');
Route::get('/tambah-guru','LayoutController@add_teacher');
Route::get('/daftar-siswa','LayoutController@list_student');
Route::get('/tambah-siswa','LayoutController@add_student');
Route::get('/daftar-kelas','LayoutController@list_class');
Route::get('/tambah-kelas','LayoutController@add_class');


