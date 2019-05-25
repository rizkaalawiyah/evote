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
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('admin/index', 'Admin@adminindex');
Route::get('admin/datart', 'Admin@index');
Route::post('/create/datart','Admin@store');
Route::post('/create/datarw','Admin@storerw');
Route::get('/delete/{id}/rt', 'Admin@delete_rt');
Route::get('/delete/{id}/rw', 'Admin@delete_rw');
Route::get('/admin/{id}/editrt', 'Admin@edit');
Route::get('/admin/{id}/editrw', 'Admin@editrw');
Route::post('/update/{id}/datart','Admin@update_rt');
Route::post('/update/{id}/datarw','Admin@update_rw');

Route::get('admin/kandidat', 'Admin@kandidat');
Route::post('/create/kandidatrt','Admin@create_paslon_rt');
Route::post('/create/kandidatrw','Admin@create_paslon_rw');
Route::get('/delete/{id}/paslonrw', 'Admin@delete_paslonrw');
Route::get('/delete/{id}/paslonrt', 'Admin@delete_paslonrt');

Route::get('admin/dpt', 'Admin@dptindex');
Route::post('/create/datadpt','Admin@storedpt');
Route::get('/delete/{id}/dpt', 'Admin@delete_dpt');
Route::get('/admin/{id}/editdpt', 'Admin@editdpt');
Route::post('/update/{id}/datadpt','Admin@update_dpt');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dpt/dashboard', 'DptController@index');
