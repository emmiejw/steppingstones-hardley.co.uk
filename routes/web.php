<?php

use App\Testimonials;


Route::get('/', function () {
    return view('steppingstones');
});

Route::get('/routine', function () {
    return view('routine');
});
Route::get('/tapestry', function () {
    return view('tapestry');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/thankyou', function () {
//     return view('testimonials.thankyou');
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thankyou', 'ThankyouController@thankyou')->name('thankyou');

    Route::resource('/about', 'AboutController');
    Route::resource('/testimonials','TestimonialController');
    Route::resource('/photogallery', 'PhotosController');
    Route::resource('/staff', 'StaffController');
    
Auth::routes();
    
Route::get('/home', 'HomeController@index')->name('home');
