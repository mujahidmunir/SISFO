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
//frontend


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'layoutController@test');

Route::get('/', 'LayoutController@index');
Route::get('/dashboard', 'LayoutController@dashboard');


Route::get('/daftar-guru', 'LayoutController@list_teacher');
Route::get('/tambah-guru', 'LayoutController@add_teacher');
Route::get('/guru/detail/{id}', 'LayoutController@detail_teacher');
Route::get('/daftar-siswa', 'LayoutController@list_student');
Route::get('/tambah-siswa', 'LayoutController@add_student');



Route::get('/daftar-kelas', 'AdminController@list_class');
Route::post('/daftar-kelas', 'AdminController@add_class');
Route::post('/edit-kelas/{id}', 'AdminController@edit_class');
Route::get('/daftar-mapel', 'AdminController@list_subject');
Route::post('/daftar-mapel', 'AdminController@save_subject');
Route::post('/edit-mapel/{id}', 'AdminController@update_subject');

Route::get('/tahun-ajaran', 'AdminController@list_years');
Route::post('/tahun-ajaran', 'AdminController@add_year');
Route::post('/update-tahun-ajaran/{id}', 'AdminController@update_year');




Route::post('tambah-guru', 'AdminController@add_teacher');
Route::post('tambah-tahun-ajaran', 'AdminController@add_class_year');
Route::post('tambah-mapel', 'AdminController@add_subject');


