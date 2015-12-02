<?php

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@index');
Route::post('/ajax', 'HomeController@ajax');
Route::get('/ajax', 'HomeController@index');