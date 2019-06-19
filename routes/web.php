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

// any: POST, GET, etc
Route::any('/', function () {
    return view('welcome');
});
// mejor match que any
Route::match(['get', 'post'],'principal', function() {
    return view('main');
});

Route::any('empresa', function (){
   return view('empresa/principal');
});

Route::get('about', function() {
    return view('about');
});

Route::get('noticias', function() {
    return view('blog/noticias');
});

Route::get('articulos', function() {
    return view('blog/articulos');
});

Route::get('contacta', function() {
    return view('contacta');
});

// con esto indicamos qué devolveremos si la página no existe
Route::fallback(function (){
   return '<h1>Esta página no existe</h1>';
});

// ruta parametrizada, noticias/loquepongamos (han de ser solo letras a-z A-Z)
Route::get('noticias/{var}', function ($var){
    return "<h1>Estoy accediendo a noticias $var</h1>";
})->where('var', '[a-zA-Z]+');



// esta ruta es para el botón que está en principal, que pone 'Volver POST'
/*
Route::post('/', function (){
    return view('welcome');
});
*/

