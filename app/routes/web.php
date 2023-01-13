<?php

Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');