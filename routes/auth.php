<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ControlpanelController@index')->name('auth.index');
Route::post('/', 'ControlpanelController@SendCode')->name('auth.sendcode');
Route::post('/emailverifies', 'ControlpanelController@verify_email')->name('condition.verify.email');
Route::post('/stdcodeverifies', 'ControlpanelController@verify_stdcode')->name('condition.verify.stdcode');
Route::post('/codeverifies', 'ControlpanelController@verify_code')->name('condition.verify.code');



// Authentication
Route::get('/confirmed', 'ControlpanelController@confirmed')->name('conditions.confirmed.code');
Route::get('/register', 'ControlpanelController@show_register_form')->name('auth.register');


Route::get('/login', function () {
    return view('system.auth.login');
})->name('auth.login');



Route::post('/match_code', 'ControlpanelController@match_code')->name('match.code');
