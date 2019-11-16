<?php

Route::get('/', 'PagesController@home');
Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/projects/update', 'ProjectsController@update');
Route::patch('/projects', 'ProjectsController@edit');
Route::get('/projects/delete', 'ProjectsController@delete');

Route::get('/about', 'PagesController@about');
