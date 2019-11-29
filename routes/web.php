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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::group(['middleware' => 'employee'], function () {

    Route::resource('sales', 'salesController');
    Route::resource('finance', 'financeController');
    Route::resource('maintenance', 'maintenanceController');
    Route::resource('inkoop', 'inkoopController');
    Route::resource('ceo', 'ceoController');
    Route::get('/createuser', function (){
        $roles = \DB::select('SELECT * FROM roles');
        return view('auth/register',  ['roles' => $roles]);
    });
});

Route::get('/redirect', 'redirectController@redirect');




//Route::get('/home', 'HomeController@index')->name('home');
