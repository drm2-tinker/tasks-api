<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Load the Dingo Router
$api = app('Dingo\Api\Routing\Router');

// API Routes
$api->version('v1', [], function ($api)
{
    // authenticated routes (most routes should be authenticated by default)
    $api->group([ 'middleware' => 'api.auth' ], function ($api)
    {
        // GET /api/auth-test
        $api->get('/auth-test', function ()
        {
            return 'Hello, Authenticated World!';
        });
    });

    // ANY /api/testing - these routes are just for testing
    $api->group([ 'prefix' => '/test' ], function ($api)
    {
        // GET /api/test
        $api->get('/', function ()
        {
            return 'Hello, World!';
        });

        // POST /api/test/authenticate
        $api->post('/authenticate', 'App\Http\Controllers\Auth\AuthController@authenticate');
    });
});
