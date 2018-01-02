<?php

Route::get('/', function () {
    return redirect('/contract');
});

Route::resource('/contract', 'ContractController');

Route::get('events', 'EventController@index');

Auth::routes();

