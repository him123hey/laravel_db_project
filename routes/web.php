<?php

Route::get('/', function () {
    return view('welcome');
});

// route for students.
Route::get('students', 'studentController@index');
Route::get('showForm', 'studentController@create');
Route::post('Student', 'studentController@store');
Route::get('edit/{id}', 'studentController@edit')->name('edit');
Route::patch('update/{id}', 'studentController@update')->name('update');
Route::get('destroy/{id}', 'studentController@destroy')->name('destroy');

//route for comment

Route::get('comments', 'commentController@index');


Route::get('post', 'PostsController@getPosts');
Route::post('insertPost', 'PostsController@insertPost');
Route::get('formPost', 'PostsController@showFormPost');
Route::get('editPost/{id}', 'PostsController@showFormEdit')->name('editPost');
Route::patch('postEdit/{id}', 'PostsController@Edit')->name('postEdit');
