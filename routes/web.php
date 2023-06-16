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

Route::get('/', 'App\Http\Controllers\VideoController@index');
Route::post('/store', 'App\Http\Controllers\VideoController@store')->name('video.store');
Route::post('/update', 'App\Http\Controllers\VideoController@update')->name('video.update');
Route::post('/delete', 'App\Http\Controllers\VideoController@delete')->name('video.delete');
