<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['tenant']], function () {
    Route::post('/projects', 'Tenant\ProjectController@store')->name('projects.store');
    Route::get('/{company}', 'Tenant\DashboardController@index');
});
