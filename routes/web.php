<?php

use App\Testimonials;


Route::get('/', function () {
    return view('steppingstones');
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/routine', function () {
//     return view('routine');
// });
// Route::get('/tapestry', function () {
//     return view('tapestry');
// });
// Route::get('/photos', function () {
//     return view('photos');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/staff', function () {
//     return view('staff');
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/testimonials', 'TestimonialController');
Route::resource('/about', 'AboutController');
Route::resource('/routine', 'RoutineController');
Route::resource('/photos', 'PhotosController');
Route::resource('/contact', 'ContactController');
Route::resource('/staff', 'StaffController');


