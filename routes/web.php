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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/login', 'AuthAdminController@viewlogin')->name('adminlogin');
Route::post('/admin/login', 'authadminLoginController@loginAdmin')->name('admin/login');
Route::get('/admin/registers', 'AuthAdminController@viewform')->name('adminregister');
Route::post('/registeradmin', 'AuthAdminController@register')->name('registeradmin');
