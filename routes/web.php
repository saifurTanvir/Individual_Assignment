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

//login
Route::get('/system/supportstaff/add', 'LoginController@index')->name('login');
Route::post('/system/supportstaff/add', 'LoginController@verify');

//admin
Route::get('/system/supportstaff/admin', 'AdminController@index')->name('admin.index');
Route::get('/system/supportstaff/admin/buses', 'AdminController@buses')->name('admin.buses');


//manager
Route::get('/system/supportstaff/manager', 'ManagerController@index')->name('manager.index');

