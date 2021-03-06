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
})->name('home');
Route::resource('purachses','purachsesController');
Route::resource('customer', 'customerController');
//Route::resource('error', 'errorController');
Route::post('quotations', 'quotationsController@mail')->name('quotations.mail');
Route::get('quotations', 'quotationsController@index')->name('quotations.index');
Auth::routes();
Route::group(['middleware' => 'employee'], function () {

    Route::resource('leases','leasesController');
    Route::resource('sales', 'salesController');
    Route::resource('finance', 'financeController');
    Route::resource('maintenance', 'maintenanceController');
    Route::resource('inkoop', 'inkoopController');
    Route::resource('ceo', 'ceoController');
    Route::get('/createuser', function (){
        $roles = \DB::select('SELECT * FROM roles');
        return view('auth/register',  ['roles' => $roles]);
    });
    Route::get('/notes', function (){
        $users = \DB::select('SELECT * FROM users WHERE role_id=1');
        return view('sales/notes', ['users' => $users]);
    });
});


//Route::get('customer', 'customerController@show');


Route::get('/redirect', 'redirectController@redirect');




//Route::get('/home', 'HomeController@index')->name('home');

