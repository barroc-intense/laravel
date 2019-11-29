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
})->name('home');
Auth::routes();

Route::resource('Purchases','PurachsesController')->middleware('auth');

Route::resource('sales', 'salesController');
Route::resource('finance', 'financeController');
Route::resource('maintenance', 'maintenanceController');
Route::resource('inkoop', 'inkoopController');
