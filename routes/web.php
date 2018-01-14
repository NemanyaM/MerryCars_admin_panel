<?php

Route::get('/', function () {
    return redirect('/contract');
});

Route::resource('/contract', 'ContractController');

Route::get('events', 'EventController@index');

Route::get('/pdf/{id}', 'PDFController@pdf');

Route::resource('car/', 'CarController');

Auth::routes();

