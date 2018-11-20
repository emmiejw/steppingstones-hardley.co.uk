<?php
use App\Mainpage;
use App\Testimonials;


Route::get('/', function () {
    $mainpages = Mainpage::all();
    return view('mainpage.index')->with('mainpages', $mainpages);
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


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thankyou', 'ThankyouController@thankyou')->name('thankyou');

    Route::resource('/about', 'AboutController');
    Route::resource('/testimonials','TestimonialController');
    Route::resource('/photogallery', 'PhotosController');
    Route::resource('/staff', 'StaffController');
    Route::resource('/main', 'SteppingstonesController');
    
    
Auth::routes();
    
Route::get('/home', 'HomeController@index')->name('home');
