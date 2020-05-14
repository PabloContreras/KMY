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
/*
**		Shows
*/
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
/*Route::get('/shows/todos', function () {
    return view('shows.shows');
});*/
Route::get('/shows/todos', 'Controller@shows');
Route::get('/shows/personal', 'PersonalController@index');
Route::get('/shows/personal/{id}', 'PersonalController@show');

Route::get('/shows/promociones', function () {
    return view('shows.promociones');
});
/*
**		Salón
*/
Route::get('/salon', function () {
    return view('salon.index');
});
Route::get('/salon/videos', function() {
	return view('salon.videos');
});
Route::get('/salon/galeria', function() {
	return view('salon.galeria');
});
Route::get('/salon/paquetes', function () {
    return view('salon.paquetes');
});
Route::get('/salon/ven_a_jugar', function () {
    return view('salon.ven_a_jugar');
});
/*
**      Cursos de verano
*/
Route::get('/cursos', function () {
    return view('cursos.curso_1');
});
Route::get('/cursos/curso_1', function () {
    return view('cursos.curso_1');
});
Route::get('/cursos/curso_2', function () {
    return view('cursos.curso_2');
});
Route::get('/cursos/curso_3', function () {
    return view('cursos.curso_3');
});

/*
**		Nosotros
*/
Route::get('/nosotros', 'Controller@nosotros');

