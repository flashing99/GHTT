<?php

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/reservation/{id}', function ($id) {

    return view('frontend.reservation', ['step'=>$id]  );
});




//
// Render in view
Route::get('/contactus', ['uses' => 'Contacts\ContactUsFormController@createForm']);

// Post form data
Route::post('/contactus', ['uses' => 'Contacts\ContactUsFormController@ContactUsForm', 'as' => 'contactus.store']);
