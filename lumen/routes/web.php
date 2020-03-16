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

$router->get('/hello/{name:[A-Za-z]+}', [
    'as'=>'hello-world',
    'uses'=>'HelloController@index']
);

$router->get('/id/{number:[0-9]+}', function ($number = '1') {
    return "Somente número $number";
});

$router->group(['prefix'=>'api'], function () use ($router) {

    $router->get('/users', [
        'as'=>'show-users',
        'uses'=>'UsersController@index']
    );

    $router->get('/users/{id}', [
        'as'=>'show-user',
        'uses'=>'UsersController@show']
    );

    $router->post('/users', [
        'as'=>'insert-user',
        'uses'=>'UsersController@store']
    );
});
