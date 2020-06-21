<?php 
    Route::group(['prefix' => 'users'], function () {

        // ROUTE VIEWS PRODUCRS
        Route::get('/','UserController@index')->name('users');
        
        // ROUTE VIEWS ADD PRODUCT
        Route::get('add','UserController@add')->name('users_add');
        Route::post('add','UserController@save_add')->name('users_add');

        // ROUTE VIEWS EDIT PRODUCT
        Route::get('edit/{id}','UserController@edit')->name('users_edit');
        Route::post('edit/{id}','UserController@save_edit')->name('users_edit');

        // ROURE VIEWS DELETE PRODUCT
        Route::get('del/{id}','UserController@delete')->name('users_del');
    });
?>