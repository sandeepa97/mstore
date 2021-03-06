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

Route::get('/', 'LoginController@index');
Route::post('user-verify', 'LoginController@verifyUser');
Route::get('logout', 'LoginController@logout');

Route::resource('admin/dashboard', 'HomeController');
Route::get('admin/test', 'HomeController@test');

