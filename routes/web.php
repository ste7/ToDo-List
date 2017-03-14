<?php


Route::get('/', [
    'uses' => '\App\Http\Controllers\HomeController@getHome',
    'as' => 'home'
]);


/*
 * Auth
 */
Route::get('/signup', [
    'uses' => '\App\Http\Controllers\AuthController@getSignUp',
    'as' => 'signup',
    'middleware' => 'guest'
]);

Route::get('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@getSignIn',
    'as' => 'signin',
    'middleware' => 'guest'
]);

Route::post('/signup', [
    'uses' => '\App\Http\Controllers\AuthController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@postSignIn',
    'as' => 'signin'
]);

Route::get('/signout', [
    'uses' => '\App\Http\Controllers\AuthController@getSignOut',
    'as' => 'signout'
]);
/*
 * Auth
 */



/*
 * Tasks actions
 */
Route::post('/create', [
    'uses' => '\App\Http\Controllers\HomeController@createTask',
    'as' => 'create'
]);

Route::post('/complete', [
    'uses' => '\App\Http\Controllers\HomeController@completeTask',
    'as' => 'complete'
]);
/*
 * Tasks actions
 */