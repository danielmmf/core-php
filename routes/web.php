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

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource group
 */
$app->get('group', 'GroupsController@all');
$app->get('group/{id}', 'GroupsController@get');
$app->post('group', 'GroupsController@add');
$app->put('group/{id}', 'GroupsController@put');
$app->delete('group/{id}', 'GroupsController@remove');

/**
 * Routes for resource group
 */
$app->get('group', 'GroupsController@all');
$app->get('group/{id}', 'GroupsController@get');
$app->post('group', 'GroupsController@add');
$app->put('group/{id}', 'GroupsController@put');
$app->delete('group/{id}', 'GroupsController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource group
 */
$app->get('group', 'GroupsController@all');
$app->get('group/{id}', 'GroupsController@get');
$app->post('group', 'GroupsController@add');
$app->put('group/{id}', 'GroupsController@put');
$app->delete('group/{id}', 'GroupsController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');

/**
 * Routes for resource player
 */
$app->get('player', 'PlayersController@all');
$app->get('player/{id}', 'PlayersController@get');
$app->post('player', 'PlayersController@add');
$app->put('player/{id}', 'PlayersController@put');
$app->delete('player/{id}', 'PlayersController@remove');
