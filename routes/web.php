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

// esta ruta es para el botón que está en principal, que pone 'Volver POST'
/* NO nos hace falta, porque hemos puesto ::any en la ruta superior para '/'
Route::post('/', function (){
    return view('welcome');
});
*/

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

// Controller: Acciones, method: aleatorio
// creamos un middleware para que solo se pueda acceder si estamos autentificados
Route::get('valor', 'Acciones@aleatorio')->middleware('auth');

/* Esta ruta, es lo equivalente a la ruta superior, pero sin utilizar un controlador
Route::get('valor', function (){
    $a = random_int(1, 100);
    return view('valor', ['valor' => $a, 'nombre' => 'Jose']);
});
*/

// generado automáticamente al activar la autentificacion
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// para mostrar la tabla alumnos en la vista http://localhost:8000/alumnos
// controller: C_Alumnos, method: mostrar
// App\Http\Controllers
// php artisan make:Controller C_Alumnos
Route::get('alumnos', 'C_Alumnos@mostrar');
