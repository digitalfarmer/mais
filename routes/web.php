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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('customers','ClientCustomer@index');
Route::get('callplan','ClientCallPlanController@index');
Route::get('products','ClientProductController@index');
Route::get('personils','client\ClientPersonil@index');
Route::get('sales-order','client\SalesOrderController@index');