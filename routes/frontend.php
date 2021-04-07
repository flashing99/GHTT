<?php

Route::get('/', function () {
    return view('frontend.home');
});






//
// Render in view
Route::get('/contactus', ['uses' => 'Contacts\ContactUsFormController@createForm']);

// Post form data
Route::post('/contactus', ['uses' => 'Contacts\ContactUsFormController@ContactUsForm', 'as' => 'contactus.store']);
