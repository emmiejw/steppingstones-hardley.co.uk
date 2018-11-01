<?php

use App\Testimonials;


Route::get('/', function () {
    return view('steppingstones');
});
Route::get('/about', function () {
    $abouts = About::all();
    return view('about.index', compact('abouts', $abouts));
});
Route::get('/routine', function () {
    return view('routine');
});
Route::get('/tapestry', function () {
    return view('tapestry');
});
// Route::get('/photos', function () {
//     return view('photos');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/staff', function () {
    $staffs = Staff::all();
    return view('staff.index', compact('staffs', $staffs));
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/testimonials', 'TestimonialController');
Route::resource('/about', 'AboutController');
Route::resource('/photos', 'PhotosController');
Route::resource('/contact', 'ContactController');
Route::resource('/staff', 'StaffController');



Auth::routes();
    Route::resource('/about', 'AboutController');
Route::get('/home', 'HomeController@index')->name('home');
