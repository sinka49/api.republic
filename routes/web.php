<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('tours', 'App\Http\Controllers\Api\TourController@index');
    $api->get('tour', 'App\Http\Controllers\Api\TourController@show');
    $api->get('places', 'App\Http\Controllers\Api\PlaceController@index');
    $api->get('place', 'App\Http\Controllers\Api\PlaceController@show');
    $api->get('category/services', 'App\Http\Controllers\Api\ServiceController@index');
    $api->get('category/service', 'App\Http\Controllers\Api\ServiceController@show');



    $api->post('login', 'App\Http\Controllers\Api\AuthController@login');
    $api->post('signup', 'App\Http\Controllers\Api\AuthController@signup');
    $api->group(['middleware' => ['jwt.auth', 'jwt.refresh']], function($api) {
        $api->post('logout', 'App\Http\Controllers\Api\AuthController@logout');
        $api->get('test', function(){
            return response()->json(['foo'=>'bar']);
        });
        $api->get('me', 'App\Http\Controllers\Api\AuthController@getAuthenticatedUser');
        $api->post('me', 'App\Http\Controllers\Api\ProfileController@me');
        $api->post('me/reset_password', 'App\Http\Controllers\Api\ProfileController@reset_pass');
        $api->post('me/avatar', 'App\Http\Controllers\Api\ProfileController@avatar');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/updates', function () {
    return view('updates');
});
