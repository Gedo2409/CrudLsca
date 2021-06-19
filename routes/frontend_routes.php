<?php 

//Route::prefix('frontend')->group(function () {
Route::get('/', ['uses' => 'frontendController@index', 'as' => 'front.index']);
Route::post('/backend', ['uses' => 'DashboardController@index', 'as' => 'backend.index']);
