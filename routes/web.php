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
// VERSION
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// unsecure routes 


// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('/users',['uses' => 'UserController@getUsers']);
// })  


//SIMPLE ROUTES



/* Same to index controller  
    $router->get('/studentsList',['uses' => 'UserController@getAllUsers']); */ 

//<-- get all users
// $router->get('/studentsList',['uses' => 'UserController@getAllUsers']);
$router->get('/book', 'UserController@index'); //<-- get all users


$router->get('/book/{id}', 'UserController@showId'); // get user by id

$router->post('/book', 'UserController@add'); // create new user record

$router->put('/book/{id}', 'UserController@update'); // update user record

$router->delete('/book/{id}', 'UserController@delete'); // delete record


// publisher routes

$router->get('/publisher', 'PublisherController@index');
$router->get('/publisher/{publisherId}', 'PublisherController@show');