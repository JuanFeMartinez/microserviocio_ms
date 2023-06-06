<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('index', 'EstudiantesController@index');
$router->get('actividades/{id}', 'ActividadesController@show');
$router->get('estudiante', 'EstudiantesController@index');
$router->get('actividad/{id}', 'ActividadesController@show');
$router->post('create', 'EstudiantesController@store');
$router->post('create-grade', 'ActividadesController@store');
$router->put('actividades/update/{id}', 'AvtividadesController@update');
//$router->put('usuarios/{id}', 'UsuarioController@update');
$router->delete('delete/{id}', 'EstudiantesController@destroy');
$router->delete('delete-grade/{id}', 'ActividadesController@destroy');
