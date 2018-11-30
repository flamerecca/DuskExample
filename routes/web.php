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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('test.welcome');

Route::get('/test/cookie', 'CookieController@cookie')->name('test.cookie');
Route::get('/test/input', 'InputController@input')->name('test.input');
Route::get('/test/checkbox', 'CheckboxController@checkbox')->name('test.checkbox');
Route::get('/test/radio', 'RadioController@radio')->name('test.radio');
Route::get('/test/select', 'SelectController@select')->name('test.select');

