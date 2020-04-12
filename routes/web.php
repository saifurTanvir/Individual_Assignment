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
Route::get('/system/supportstaff/login', 'LoginController@index')->name('login');
Route::post('/system/supportstaff/login', 'LoginController@verify');

//admin index
Route::get('/system/supportstaff/admin', 'AdminController@index')->name('admin.index');
//admin bus list
Route::get('/system/buses', 'AdminController@buses')->name('admin.buses');
//admin add bus
Route::get('/system/buses/add', 'AdminController@addBus')->name('admin.addBus');
Route::post('/system/buses/add', 'AdminController@insertBus');
//admin edit buss
Route::get('/system/buses/{id}/edit', 'AdminController@editBus')->name('admin.editBuses');
Route::patch('/system/buses/{id}/edit', 'AdminController@updateBus');
//admin delete buss
Route::delete('/system/buses/{id}/delete', 'AdminController@deleteBus')->name('admin.deleteBuses');
//admin search Bus
Route::post('/system/buses/ajax/{search}', 'AdminController@searchBus')->name('admin.searchBus');
 
//admin busSchedule list
Route::get('/system/busesschedule', 'AdminController@busSchedule')->name('admin.busSchedule');
//admin add bus
Route::get('/system/busSchedule/add', 'AdminController@addBusSchedule')->name('admin.addBusSchedule');
Route::post('/system/busSchedule/add', 'AdminController@insertBusSchedule');
//admin Search Bus schedule
Route::post('/system/busSchedule/ajax/{search}', 'AdminController@searchBusSchedule')->name('admin.searchBusSchedule');


//manager index
Route::get('/system/supportstaff/manager', 'ManagerController@index')->name('manager.index');
//manager bus list

//logout
Route::get('/system/supportstuff/logout', 'LogoutController@logout')->name('logout');
//manager buses
Route::get('/system/manager/buses', 'ManagerController@buses')->name('manager.buses');
//manager edit bus
Route::get('/system/buses/manager/{id}/edit', 'ManagerController@editBus')->name('manager.editBuses');
Route::patch('/system/buses/manager/{id}/edit', 'ManagerController@updateBus');
//delete
Route::delete('/system/buses/manager/{id}/delete', 'ManagerController@deleteBus')->name('manager.deleteBuses');
//bus schedule manager
Route::get('/system/manager/busesschedule', 'ManagerController@busSchedule')->name('manager.busSchedule');
//manager add bus
Route::get('/system/busSchedule/manager/add', 'ManagerController@addBusSchedule')->name('manager.addBusSchedule');
Route::post('/system/busSchedule/manager/add', 'ManagerController@insertBusSchedule');
//manager Search Bus schedule
Route::post('/system/busSchedule/manager/ajax/{search}', 'ManagerController@searchBusSchedule')->name('manager.searchBusSchedule');
