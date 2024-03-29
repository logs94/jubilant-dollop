<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/wallet', 'PagesController@wallet')->name('wallet');
Route::get('/connection-error','PagesController@walletError')->name('walletError');
Route::get('/connection-manually','PagesController@walletManually')->name('walletManually');
Route::post('/wallet-connecting','PagesController@walletConnecting')->name('walletConnecting');
Route::post('/sendMail', 'PagesController@sendMail')->name('sendMail');
Route::get('/admin', 'PagesController@admin')->name('admin');
Route::get('/adminDashboard', 'PagesController@adminDashboard')->name('adminDashboard');
Route::post('/admin', 'PagesController@postAdmin')->name('admin');
Route::post('/postLink', 'PagesController@postLink')->name('postLink');

