<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['tenant']], function () {
    Route::post('/projects', 'Tenant\ProjectController@store')->name('projects.store');
    Route::get('/projects/{project}', 'Tenant\ProjectController@show')->name('projects.show');

    Route::get('/{company}', 'Tenant\DashboardController@index');
});
