<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function ()
    {
        Route::get('products','ProductController@index')->name('products');
        Route::get('products/del/{id}','ProductController@delete')->name('products_del');
        Route::get('products/add','ProductController@add')->name('products_add');
        Route::post('products/add','ProductController@save_add')->name('products_add');
        Route::get('products/edit/{id}','ProductController@edit')->name('products_edit');
        Route::post('products/edit/{id}','ProductController@save_edit')->name('products_edit');
    });

