<?php
URL::forceScheme('https');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/pusher/auth', 'HomeController@authenticate');
