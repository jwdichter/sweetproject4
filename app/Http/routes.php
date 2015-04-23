<?php

Route::get('/', 'sweetController@getIndex');

Route::get('/people', 'sweetController@getPeople');
Route::post('/people', 'sweetController@postPeople');

Route::get('/text', 'sweetController@getText');
Route::post('/text', 'sweetController@postText');