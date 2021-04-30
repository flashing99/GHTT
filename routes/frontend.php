<?php


use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/home', function(){
    return view('frontend.home');
});*/
//== Sliders ============
Route::get('/', 'HomeController@index')->name("/");
//=== Restaurants ======
/*Route::get('/about', function () {
    return view('frontend.about' );
});
 */
//==== Rooms ====
Route::get('/rooms', function () {
    return view('frontend.rooms' );
})->name('show-rooms');

Route::get('/rooms/{type}', function ($type) {
    return view('frontend.rooms.room-details', ['type'=>$type] );
})->name('details-room');

//== Sliders ============
Route::get('/sliders', 'Sliders\SlidersController@index')->name("show.sliders");
//=== Restaurants ======

Route::get('/restaurants', 'Restaurants\RestaurantsController@index')->name("show.restaurants");

//== Gallery ============

Route::get('/gallery', 'Galleries\GalleriesController@index')->name("show.galleries");

//== Booking ============

Route::get('/reservation/{id}','Reservations\ReservationsController@show')->name('reservation.show');
Route::post('/reservation/{id}', 'Reservations\ReservationsController@find')->name('reservation.find');
Route::post('/reservation/{id}', 'Reservations\ReservationsController@check')->name('reservation.check');
// Route::post('/reservation/{id}', 'Reservations\ReservationsController@search')->name('reservation.search');



//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++




//  ::::::::::::::::::::::::::::::  Salim ::::::::::::::::::::::::::::::::::::::::::::::::::

Route::namespace('Bookings')->group(function () {
    //Route::resource('/bookings', 'BookingsController');
    //Route::get('create/', ['as' => 'create', 'uses' => 'BookingsController@create']);

    Route::get('/search/room/', 'BookingsController@searchRoomForm')->name('Booking.searchRoomForm');
    Route::post('/search/room/', 'BookingsController@searchRoom')->name('Booking.searchRoom');

    Route::get('/room/{type}/{view}', 'BookingsController@reserveForm')->name('Booking.bookit');
});

// Render in view
Route::get('/contactus', ['uses' => 'Contacts\ContactUsFormController@createForm']);

// Post form data
Route::post('/contactus', ['uses' => 'Contacts\ContactUsFormController@ContactUsForm', 'as' => 'contactus.store']);
