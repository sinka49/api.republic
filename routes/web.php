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


    $api->post('/auth/app', 'Api\AuthController@authenticateApp');

    // Аутентификация пользователей...
    $api->post('/auth/user', 'Api\AuthController@authenticateUser')->middleware('auth.api.app');
    $api->post('/auth/user/logout', 'Api\AuthController@logoutUser')->middleware('auth.api.user');

    // Тестовые  маршруты
    $api->get('/application-data', 'Api\HomeController@appData')->middleware('auth.api.app');
    $api->get('/user-data', 'Api\HomeController@userData');
});

Route::get('/', function () {
    return view('welcome');
});


