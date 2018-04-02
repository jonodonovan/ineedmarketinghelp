<?php

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/job/create/preview/{record}', 'JobController@preview')->name('job.preview');
Route::get('/job/create/purchase/{record}', 'JobController@purchase')->name('job.purchase');
Route::get('/job/create/thankyou/{record}', 'JobController@thankyou')->name('job.thankyou');
Route::post('/job/purchased/{record}', 'JobController@purchased')->name('job.purchased');
Route::resource('job', 'JobController');

Route::get('/company/{slug}', 'CompanyController@show')->name('company.show');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('/type/{type}', 'TypeController@show')->name('type.show');
Route::get('/desk/{desk}', 'DeskController@show')->name('desk.show');
Route::get('/location/{location}', 'LocationController@show')->name('location.show');

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
