<?php

Route::get('/', function () {
    return view('frontend.home');
});




Route::namespace('Bookings')->group(function () {
    //Route::resource('/bookings', 'BookingsController');
    //Route::get('create/', ['as' => 'create', 'uses' => 'BookingsController@create']);

    Route::get('/search/room/', 'BookingsController@searchRoomForm')->name('Booking.searchRoomForm');
    Route::post('/search/room/', 'BookingsController@searchRoom')->name('Booking.searchRoom');

    Route::get('/room/{type}/{view}', 'BookingsController@reserveForm')->name('Booking.bookit');
});











//
// Render in view
Route::get('/contactus', ['uses' => 'Contacts\ContactUsFormController@createForm']);

// Post form data
Route::post('/contactus', ['uses' => 'Contacts\ContactUsFormController@ContactUsForm', 'as' => 'contactus.store']);