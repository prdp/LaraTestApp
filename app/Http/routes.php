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

Route::get('layout', function () {
    return view('master');
});

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::resource('tasks', 'TasksController');

//Route::get('tasks/', [
//    'as' => 'index',
//    'uses' => 'TasksController@index'
//]);

Route::get('ordersk', function () {
    return view('orders');
});

Route::get('orders', [
    'as' => 'orders', 'uses' => 'TestController@getOrders'
]);
