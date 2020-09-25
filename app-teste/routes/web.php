<?php

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

$router->post('/cadastros', 'CadastrosController@create');
$router->get('/cadastros', 'CadastrosController@get');
$router->get('/cadastros/{id}', 'CadastrosController@get');
$router->put('/cadastros/{id}', 'CadastrosController@update');
$router->delete('/cadastros/{id}', 'CadastrosController@delete');
