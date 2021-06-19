<?php




Route::prefix('backend')->group(function () {
    //El route::resource simplifica las operaciones de index, create, store, show, edit, update y destroy
    //Cualquier otra operación declarada aparte de estas, se declara en la parte inferior
    Route::resource('/', 'DashboardController');
    Route::resource('/colaboradores', 'ColabController');
    Route::resource('/carta', 'CartaController');
    Route::resource('/blog', 'BlogController');
    Route::resource('/comanda', 'ComandaController');



});