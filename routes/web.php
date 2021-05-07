<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/add', function () {
    return view('add');
});

Route::get('/', 'App\Http\Controllers\EventController@show');
Route::post('/add_process', 'App\Http\Controllers\EventController@add_process');
Route::get('/detail/{id}', 'App\Http\Controllers\EventController@detail');
Route::get('/admin', 'App\Http\Controllers\EventController@show_by_admin');
Route::get('/edit/{id}', 'App\Http\Controllers\EventController@edit');
Route::post('/edit_process', 'App\Http\Controllers\EventController@edit_process');
Route::get('/delete/{id}', 'App\Http\Controllers\EventController@delete');