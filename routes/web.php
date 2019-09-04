<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['tenant']], function () {
    Route::get('/projects', 'Tenant\ProjectController@index');
    Route::get('/{company}', 'Tenant\DashboardController@index');
});
