<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register'  => false,   // Registration Routes...
    'reset'     => false,    // Password Reset Routes...
    'verify'    => false,   // Email Verification Routes...
  ]);
//Route::get('/', 'Admin\LoginAdminController@showLoginForm')->name('login');

// Route::get('/', function () {
//     return view('backend.index');
// });

Route::redirect('/', '/backoffice/login');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('login', 'Admin\LoginAdminController@showLoginForm')->name('login');
Route::post('login', 'Admin\LoginAdminController@login')->name('login');
Route::post('logout', 'Admin\LoginAdminController@logout')->name('logout');


Route::get('/change-password', 'Admin\ChangePasswordController@index')->name('change.password');
Route::post('/change-password', 'Admin\ChangePasswordController@store')->name('change.password');

Route::get('/profile', 'Admin\ProfileController@edit')->name('profile');
Route::patch('/profile', 'Admin\ProfileController@update')->name('profile.update');

//Route::get('partners/logo/{filename}', 'Partners\PartnerController@displayPartnerLogo')->name('image.displayPartnerLogo');
//Route::get('news/image/{filename}', 'News\NewsController@displayNewsImage')->name('image.displayNewsImage');

// Utilisateurs :
//Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
Route::namespace('Admin')->name('admin.')->middleware('can:manage-users')->group(function(){

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

    Route::get('/search/room/', 'BookingsController@searchRoomForm')->name('Bookings.searchRoomForm');
    Route::post('/search/room/', 'BookingsController@searchRoom')->name('Bookings.searchRoom');

});


// Sliders
Route::namespace('Sliders')->middleware('can:manage-sliders')->group(function(){

    Route::resource('/sliders', 'SliderController');

    Route::get('/sliders/updateOrder/{slider}/{order}', 'SliderController@updateOrder');
    
});

// Events
Route::namespace('Events')->middleware('can:manage-events')->group(function(){

    Route::resource('/events', 'EventController');
    
});


// Galleries
Route::namespace('Galleries')->middleware('can:manage-galleries')->group(function(){

    Route::resource('/galleries', 'GallerieController');

    Route::post('/galleries/ajax/{gallery}/status', 'GallerieController@statusMedia');

    Route::get('/galleries/images/{filename}', 'GallerieController@displayImage')->name('image.displayImage');
    Route::get('/galleries/images/thumbnail/{filename}', 'GallerieController@displayThumbnailImage')->name('image.displayThumbnailImage');

/*
    Route::get('/galleries', 'GallerieController@index')->name('galleries.index');
    Route::resource('/galleries/images', 'GallerieController');
    Route::resource('/galleries/videos', 'GallerieController');
*/
    /*
    Route::get('/galleries/image/create', 'GallerieController@createImage')->name('galleries.create.image');
    Route::post('/galleries/image', 'GallerieController@storeImage')->name('galleries.store.image');
    Route::get('/galleries/image/edit/{gallery}', 'GallerieController@editImage')->name('galleries.edit.image');
    Route::put('/galleries/image/{gallery}', 'GallerieController@updateImage')->name('galleries.update.image');
    Route::delete('/galleries/image/{gallery}', 'GallerieController@destroyImage')->name('galleries.destroy.image');

    Route::get('/galleries/video/create', 'GallerieController@createVideo')->name('galleries.create.video');
    Route::post('/galleries/video', 'GallerieController@storeVideo')->name('galleries.store.video');
    Route::get('/galleries/video/edit/{gallery}', 'GallerieController@editVideo')->name('galleries.edit.video');
    Route::put('/galleries/video/{gallery}', 'GallerieController@updateVideo')->name('galleries.update.video');
    Route::delete('/galleries/video/{gallery}', 'GallerieController@destroyVideo')->name('galleries.destroy.video');
    */
});

// Route::get('articles/images/{filename}', 'Articles\ProductController@displayImage')->name('image.displayImage');
// Route::get('articles/images/thumbnail/{filename}', 'Articles\ProductController@displayThumbnailImage')->name('image.displayThumbnailImage');


// Housings
Route::namespace('Housings')->middleware('can:manage-housings')->group(function(){

    Route::resource('/housings', 'HousingController');
    Route::post('/housings/ajax/{housing}/vipstatus', 'HousingController@statusVip');
    Route::post('/housings/ajax/{housing}/onlinestatus', 'HousingController@statusOnline');
});


/*
// Revendeurs
Route::namespace('Dealers')->prefix('revendeurs')->name('dealers.')->middleware('can:manage-dealers')->group(function(){

    Route::resource('/users', 'DealerController'); // Les admins
    Route::post('/users/ajax/{dealer}/status', 'DealerController@statusUser');

});

// Sliders
Route::namespace('Sliders')->middleware('can:manage-sliders')->group(function(){

    Route::resource('/sliders', 'SliderController'); // Les admins
    Route::post('/sliders/ajax/{slider}/status', 'SliderController@statusUser');
    
});

// Produits
Route::namespace('Products')->middleware('can:manage-products')->group(function(){

    Route::resource('/products', 'ProductController'); // Les admins
    Route::post('/products/ajax/{product}/status', 'ProductController@statusProduct');
    Route::get('/products/image/{filename}', 'ProductController@displayProductImage')->name('image.displayProductImage');
    
});

// News
Route::namespace('News')->middleware('can:manage-news')->group(function(){

    Route::resource('/news', 'NewsController'); // Les admins
    Route::post('/news/ajax/{news}/status', 'NewsController@statusNews');
    Route::get('/news/image/{filename}', 'NewsController@displayNewsImage')->name('image.displayNewsImage');
});

// Partners
Route::namespace('Partners')->middleware('can:manage-partners')->group(function(){

    Route::resource('/partners', 'PartnerController'); // Les admins
    Route::post('/partners/ajax/{partner}/status', 'PartnerController@statusPartner');
    Route::get('/partners/logo/{filename}', 'PartnerController@displayPartnerLogo')->name('image.displayPartnerLogo');
});


// Banners
// Route::namespace('Banners')->middleware('can:manage-banners')->group(function(){

//     Route::resource('/banners', 'BannerController'); // Les admins
//     Route::post('/clients/ajax/{banner}/status', 'BannerController@statusBanner');

// });

Route::namespace('Banners')->prefix('advertising')->name('banners.')->middleware('can:manage-banners')->group(function(){

    Route::resource('/banners', 'BannerController'); // Les admins
    Route::post('/banners/ajax/{banner}/status', 'BannerController@statusBanner');

    Route::resource('/clients', 'BannerClientController'); // Les admins
    Route::post('/clients/ajax/{client}/status', 'BannerClientController@statusClient');

    Route::resource('/zones', 'ZoneController'); // Les admins
    Route::post('/zones/ajax/{zone}/status', 'ZoneController@statusZone');

    Route::get('/banners/image/{filename}', 'BannerController@displayBanner')->name('display.banner');

});
*/