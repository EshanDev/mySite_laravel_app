<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ControlpanelController@index')->name('auth.index');

Route::get('/register', function(){
    return view('system.auth.register');
})->name('auth.register');
Route::get('/login', function(){
    return view('system.auth.login');
})->name('auth.login');