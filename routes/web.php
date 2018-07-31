<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/paths', 'HomeController@learningpaths')->name('paths');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('load/{name}', ['middleware' => [], function($name) {

    return view('layouts.includes.'.$name);
}]);
Route::get('courses', 'CourseController@index')->name('courses.all');
Route::get('course/{id}/show', 'CourseController@show')->name('course.show');
