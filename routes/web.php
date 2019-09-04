<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{company}', 'Tenant\DashboardController@index');
