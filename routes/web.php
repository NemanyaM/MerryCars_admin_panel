<?php

Route::get('/', function () {
    return redirect('/contract');
});

Route::get('/home', function () {
    return redirect('/contract');
});
Route::resource('/contract', 'ContractController');
Route::resource('/car', 'CarController');
Route::resource('/finances', 'FinanceController');
Route::resource('/diaries', 'DiaryController');
Route::get('/events', 'EventController@index');
Route::get('/pdf/{id}', 'PDFController@pdf');
Auth::routes();






