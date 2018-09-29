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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/auth/login', 'AuthController@loginPost');

$app->get('/posts', 'PostController@index');
$app->post('/posts', 'PostController@create');
$app->put('/posts/{postId}', 'PostController@update');

$app->post('/users', 'UserController@create');
$app->get('/users', 'UserController@index');

