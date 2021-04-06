<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes([
    'register'  => false,   // Registration Routes...
    'reset'     => true,    // Password Reset Routes...
    'verify'    => true,   // Email Verification Routes...
  ]);


// backoffice :
Route::namespace('Backend')->prefix('backoffice')->group(function(){


    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('login', 'Admin\LoginAdminController@showLoginForm')->name('login');
    Route::post('login', 'Admin\LoginAdminController@login')->name('login');
    Route::post('logout', 'Admin\LoginAdminController@logout')->name('logout');


    Route::get('change-password', 'Admin\ChangePasswordController@index');
    Route::post('change-password', 'Admin\ChangePasswordController@store')->name('change.password');

    Route::get('/profile', 'Admin\ProfileController@edit')->name('profile');
    Route::patch('/profile', 'Admin\ProfileController@update')->name('profile.update');

    // Utilisateurs :
    //Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

        // Administrateurs :
        Route::resource('/users', 'UserController'); // Les admins
        Route::post('/users/ajax/{user}/status', 'UserController@statusUser');

        // Livreurs :
        // Route::resource('/deliverymen', 'DeliveryController'); // Les admins
        // Route::post('/deliverymen/ajax/{delivery}/status', 'DeliveryController@statusUser');

    });

    Route::namespace('Bookings')->group(function(){
        Route::resource('/bookings', 'BookingsController');
        //Route::get('create/', ['as' => 'create', 'uses' => 'BookingsController@create']);
    });

    




    // Revendeurs
    // Route::namespace('Dealers')->prefix('revendeurs')->name('dealers.')->middleware('can:manage-dealers')->group(function(){

    //     Route::resource('/users', 'DealerController'); // Les admins
    //     Route::post('/users/ajax/{dealer}/status', 'DealerController@statusUser');

    // });





});
*/