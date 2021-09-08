<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('series', 'SerieController@store');
    $router->get('series', 'SerieController@index');
    $router->get('series/{id}', 'SerieController@show');
    $router->put('series/{id}', 'SerieController@update');
    $router->delete('series/{id}', 'SerieController@destroy');
});