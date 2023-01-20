<?php

use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
  return view('welcome');
});

Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index']);

Route::get('/detalle/{year?}', [
  'middleware' => 'testyear',
  'uses' => 'App\Http\Controllers\PeliculaController@detalle',
  'as' => 'detalle.pelicula'
]);

Route::get('/redirigir', [PeliculaController::class, 'redirigir']);

Route::get('/formulario', [PeliculaController::class, 'formulario']);
Route::post('/recibir', [PeliculaController::class, 'recibir']);

Route::resource('usuario', UsuarioController::class);

//Rutas de frutas
Route::group(['prefix' => 'frutas'], function () {
  Route::get('/index', [FrutaController::class, 'index']);
  Route::get('/detail/{id}', [FrutaController::class, 'detail']);
});




/*
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

// Route::get('/mostrar_fecha', function () {
//     $titulo = "Estoy mostrando la fecha";
//     return view("mostrar-fecha", array(
//         'titulo' => $titulo
//     ));
// });

// Route::get('/pelicula/{titulo}/{year?}', function ($titulo = "No hay pelicula seleccionada", $year = 2019) {
//     return view("pelicula", array(
//         "titulo" => $titulo,
//         "year" => $year
//     ));
// })->where(array(
//     'titulo' => '[a-zA-Z]+',
//     "year" => '[0-9]+'
// ));

// Route::get('/listado-peliculas', function () {

//     $titulo = "Listado de peliculas";
//     $listado = array("Batman", "Spiderman", "Gran Torino");

//     return view('peliculas.listado')
//         ->with('titulo', $titulo)
//         ->with('listado', $listado);
// });

// Route::get('/pagina-generica', function () {
//     return view('pagina');
// });
