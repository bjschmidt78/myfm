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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/', function () {
    return view('test');
});

Route::get('/test2/', function () {
    return view('test2');
});

Route::get('/test3/', function () {
    return view('test3');
});

Route::get('/newWorkOrder/', function () {
    return view('workorder/newWorkorder');
});

Route::get('/listWorkOrder/', function () {
    return view('workorder/listWorkorder');
});

Route::get('/editUser/', function () {
    return view('users/editUser');
});

Route::get('/user/', function () {
    return view('users/index');
});

Route::get('/wo2/', function () {
    return view('wo2/index');
});

Route::resource('users', 'UsersController');

Route::resource('categories', 'CategoriesController');

Route::resource('workorder', 'WorkorderController');

Route::resource('test', 'TestController');

Route::resource('test3', 'TaskController');

Route::resource('workorder2', 'WorkOrderController2');

Route::resource('workorderlist', 'WorkOrderListController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

