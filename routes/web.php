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

$router->group(['prefix' => 'api'], function($router) {
    $router->get('/users', 'UserController@showUsers');
    $router->get('/users/{id}', 'UserController@showUser');
    $router->post('/users', 'UserController@addUser');
    $router->patch('/users/{id}', 'UserController@updateUser');
    $router->delete('/users/{id}', 'UserController@deleteUser');
});

$router->group(['prefix' => 'api'], function($router) {
    $router->get('/usersjob', 'UserJobController@showUsers');
    $router->get('/usersjob/{id}', 'UserJobController@showUser');
});