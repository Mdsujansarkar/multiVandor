<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'ProductController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
