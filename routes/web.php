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
    return 'Hello World';
});

$router->post('/register','UsersController@register');

$router->get('/books', 'BooksController@index');
$router->get('/books/{book}', 'BooksController@show');
$router->post('/books/create', 'BooksController@store');
$router->put('/books/{book}', 'BooksController@update');
$router->delete('/books/{book}/delete', 'BooksController@destroy');



// Route::get('/users', 'UserController@index');
// // create and store handled by auth
// Route::get('/users/{id}', 'UserController@show');
// Route::get('/users/{id}/edit', 'UserController@edit');
// // Route::put('users/{id}', 'UserController@update');
// Route::post('/users/{id}/edit', 'UserController@update');
// Route::get('/users/{id}/delete', 'UserController@destroy');



// Route::get('/checkout', 'CheckoutController@index');
// Route::get('/checkout/out', 'CheckoutController@create');
// Route::post('/checkout/out', 'CheckoutController@store');
// Route::get('/checkout/in', 'CheckoutController@edit');
// Route::post('/checkout/in', 'CheckoutController@destroy');
