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


Auth::routes();

Route::get('/', 'UserController@index')->name('user');
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/order', 'OrderController@index')->name('order');
Route::get('/laporan', 'LaporanController@index')->name('laporan');
Route::get('/laporan/customer', 'LaporanController@customer')->name('laporan.customer');
Route::get('/laporan/customer/detail', 'LaporanController@detail')->name('laporan.customer.detail');
Route::get('/laporan/customer/detail-agent', 'LaporanController@detailAgent')->name('laporan.customer.agent');
Route::get('/laporan/agent', 'LaporanController@agent')->name('laporan.agent');
Route::get('/laporan/item/detail', 'LaporanController@detailItem')->name('laporan.item.detail');
Route::get('/laporan/category', 'LaporanController@category')->name('laporan.category');
Route::get('/laporan/category/detail/{id}', 'LaporanController@detailCategory')->name('laporan.category.detail');
Route::get('/laporan/top', 'LaporanController@top')->name('laporan.top');
