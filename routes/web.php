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

Route::get('/editUser/', function () {
    return view('users/editUser');
});

Route::get('/user/', function () {
    return view('users/index');
});

Route::resource('workorderlist', 'WorkOrderListController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['admin'])->group(function() {
	Route::resource('users', 'UsersController');
	Route::resource('completeworkorder', 'CompleteWorkorderController');
	Route::resource('workorder', 'WorkorderController');
	Route::resource('categories', 'CategoriesController');
	Route::resource('statuses', 'StatusController');
	Route::resource('tasks', 'TaskController');
});
