<?php 

//Route::prefix('frontend')->group(function () {
Route::get('/', ['uses' => 'frontendController@index', 'as' => 'front.index']);
Route::post('/backend', ['uses' => 'DashboardController@index', 'as' => 'backend.index']);
Route::get('/platillos', ['uses' => 'FrontendController@platillos', 'as' => 'front.platillos']);
Route::get('/blogs', ['uses' => 'FrontendController@blogs', 'as' => 'front.blogs']);

Route::get('/blog/{id}', ['uses' => 'FrontendController@blog', 'as' => 'front.blog']);
