<?php

use Illuminate\Support\Facades\Route;

// --------------- RUTAS WEB ----------------- //
// Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
// rutas son cargadas por el RouteServiceProvider dentro de un grupo que

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/prueba', function () {
    
    return 'Hola esta es una ruta de prueba';

});

// --------------- Rutas con parametors ----------------- //

Route::get("cursos/{curso}-(cate?)", function($curso, $cate=null){
    return "Bienvenido al curso de: $curso  de la categoría: $cate";
})->where('curso', '[a-zA-Z]+');

// Otra forma de definir la misma ruta con parámetros

Route::get('curso/{curso}-{cate?}', function ($curso, $cate = null) {
    return "Bienvenido al curso de: $curso de la categoría: $cate";
});
// Proteger rutas con expresiones regulares 
// Se conectar con AppServiceProvider
// ruta con numeros y letras
//solo numeros del 0 al 8
Route::get('producto/{producto}', function ($producto) {
    return "Estás viendo el producto con ID: $producto";
});
// --------------- Rutas con nombre ----------------- //
// Probando LARADUMS
Route::get('/laradums', function () {
    return "hola laradums" ;
});
