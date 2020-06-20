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
    ->middleware('auth')
    ->group(function ()
    {
        Route::get('','AdminController@index')->name('admin');

        Route::get('/logout','AdminController@logout') -> name('logout');

        // INCLUDE PRODUCTS ROUTES
        include('admin/product.php');

        // INCLUDE CATEGORIES ROUTES
        include('admin/categories.php');
    });

    Route::group(['prefix' => 'admin'], function () {
        Auth::routes();
    });