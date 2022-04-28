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

$router->get('/', function() use ($router) {
    return response()->json("PHP Challenge 20201117",200);
});

$router->group(['prefix' => 'products' ], function () use ($router) {
    $router->get('', 'ProductController@index');
    $router->post('', 'ProductController@store');
    $router->delete('/{id}', 'ProductController@destroy');
    $router->put('/{id}', 'ProductController@update');
    $router->get('/{id}', 'ProductController@show');

});