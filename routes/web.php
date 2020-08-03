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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('Register-success');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard/products', 'DashboardProductController@index')->name('dashboard-product');

Auth::routes();


