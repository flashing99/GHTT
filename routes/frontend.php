<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/home', function(){
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about' );
});


//==== Reservation  ====
/*Route::get('/reservation', function () {
    return view('frontend.reservation' );
});*/

/*Route::get('/reservation/{id}', function ($step) {
    return view('frontend.reservation', ['step'=>$step]  );
})->name('reservation');
*/

//==== Rooms ====
Route::get('/rooms', function () {
    return view('frontend.rooms' );
})->name('show-rooms');

Route::get('/rooms/{type}', function ($type) {
    return view('frontend.rooms.room-details', ['type'=>$type] );
})->name('details-room');



//=== Restaurabts ======
/*Route::get('/restaurants', function () {
    return view('frontend.restaurants' );
})->name('show-restaurants');;


Route::get('/restaurants/{name}', function ($name) {
    return view('frontend.restaurants',['name'=>$name] );
})->name('details-restaurant');;*/


Route::get('/restaurants', 'Restaurants\RestaurantsController@index')->name("show-restaurants");

/*Route::get('/reservation/{id}', function ($step) {
    return view('frontend.reservation', ['step'=>$step]  );
})->name('reservation');*/

//Route::get('/reservations/','Reservations\ReservationsController@index' )->name('reservations.index');
Route::get('/reservation/{id}','Reservations\ReservationsController@show')->name('reservation.show');
Route::post('/reservation/{id}', 'Reservations\ReservationsController@find')->name('reservation.find');
Route::post('/reservation/{id}', 'Reservations\ReservationsController@check')->name('reservation.check');

/*Route::post('/reservation/{id}', 'Reservations\ReservationsController@search')->name('reservation.search');*/


//
// Render in view
Route::get('/contactus', ['uses' => 'Contacts\ContactUsFormController@createForm']);

// Post form data
Route::post('/contactus', ['uses' => 'Contacts\ContactUsFormController@ContactUsForm', 'as' => 'contactus.store']);
