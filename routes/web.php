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

$app->get('/', ['as' => 'landing', function () use ($app) {
    return  $app->make('view')->make('content.landing');
}]);

$app->get('/detail', function () use ($app) {
    return  $app->make('view')->make('content.detail');
});
