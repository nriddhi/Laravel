<?php


Route::resource('userinfo','infoController');



Route::get('/solid', function () {
    return view('solid.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
