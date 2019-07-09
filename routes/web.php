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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shows', function () {
    return view('shows.index');
});
Route::get('/shows/buscar', function () {
    return view('shows.buscar_show');
});

Route::get('/shows/videos', function () {
    return view('shows.video');
});
Route::get('/shows/galeria', function () {
    return view('shows.galeria');
});
Route::get('/shows/todos', function () {
    return view('shows.shows');
});
Route::get('/shows/personal', 'PersonalController@index');
Route::get('/shows/personal/{id}', 'PersonalController@show');

Route::get('/shows/promociones', function () {
    return view('shows.promociones');
});
