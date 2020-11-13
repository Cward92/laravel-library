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

// Routes for Books
$router->get('/books', 'BooksController@index');
$router->get('/books/{book}', 'BooksController@show');
$router->post('/books/create', 'BooksController@store');
$router->put('/books/{book}', 'BooksController@update');
$router->delete('/books/{book}/delete', 'BooksController@destroy');

// Routes for Users
$router->get('/users', 'UsersController@index');
$router->get('/users/{user}', 'UsersController@show');
$router->post('/users/create', 'UsersController@store');
$router->put('/users/{user}', 'UsersController@update');
$router->delete('/users/{user}/delete', 'UsersController@destroy');

// Routes to Checkout
$router->get('/checkout', 'CheckoutController@index'); //view list of all checked out books
$router->post('/checkout', 'CheckoutController@store');
$router->delete('/checkout/{id}/delete', 'CheckoutController@destroy');
