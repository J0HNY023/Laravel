<?php



Route::get('/bands','BandsController@index');
Route::get('/bands/{band}', 'BandsController@show');

Route::get('/bands/create/create','BandsController@create');

Route::post('/bands/store','BandsController@store');
Route::get('/bands/delete/{id}','BandsController@delete');
Route::get('/bands/edit/{band}','BandsController@edit');
Route::post('/bands/update','BandsController@update');


Route::get('/bands/{band}/songs/create', 'SongsController@create');

Route::get('/bands/songs/{song}/edit', 'SongsController@edit');
Route::get('/bands/songs/{song}/delete', 'SongsController@delete');
Route::post('/bands/{band}/songs/store', 'SongsController@store');
Route::post('/bands/songs/update', 'SongsController@update');
