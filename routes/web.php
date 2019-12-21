<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

/** Dashboard */
Route::prefix('home')->group( function () {
    Route::get('', 'DashboardController@index')->name('dashboard.index');
});

/** Schedule */
Route::prefix('schedule')->group( function () {
    Route::get('', 'ScheduleController@index')->name('schedule.index');
    Route::get('create', 'ScheduleController@create')->name('schedule.create');
    Route::post('store', 'ScheduleController@store')->name('schedule.store');
    Route::get('show/{id}', 'ScheduleController@show')->name('schedule.show');
    Route::get('edit/{id}', 'ScheduleController@edit')->name('schedule.edit');
    Route::post('update/{id}', 'ScheduleController@update')->name('schedule.update');
    Route::get('delete/{id}', 'ScheduleController@destroy')->name('schedule.destroy');
});

/** Clients */
Route::prefix('clients')->group( function () {
    Route::get('', 'ClientController@index')->name('clients.index');
    Route::get('create', 'ClientController@create')->name('clients.create');
    Route::post('store', 'ClientController@store')->name('clients.store');
    Route::get('show/{id}', 'ClientController@show')->name('clients.show');
    Route::get('edit/{id}', 'ClientController@edit')->name('clients.edit');
    Route::post('update/{id}', 'ClientController@update')->name('clients.update');
    Route::get('delete/{id}', 'ClientController@destroy')->name('clients.destroy');
});

/** Procedures */
Route::prefix('procedures')->group( function () {
    Route::get('', 'ProcedureController@index')->name('procedures.index');
    Route::get('create', 'ProcedureController@create')->name('procedures.create');
    Route::post('store', 'ProcedureController@store')->name('procedures.store');
    Route::get('show/{id}', 'ProcedureController@show')->name('procedures.show');
    Route::get('edit/{id}', 'ProcedureController@edit')->name('procedures.edit');
    Route::post('update/{id}', 'ProcedureController@update')->name('procedures.update');
    Route::get('delete/{id}', 'ProcedureController@destroy')->name('procedures.destroy');
});

/** Profile */
Route::prefix('profiles')->group( function () {
    Route::get('edit/{id}', 'ProfileController@edit')->name('profiles.edit');
    Route::post('update/{id}', 'ProfileController@update')->name('profiles.update');
});

