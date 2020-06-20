<?php

    Route::group(['prefix' => 'products'], function () {

        // ROUTE VIEWS PRODUCRS
        Route::get('/','ProductController@index')->name('products');
        
        // ROUTE VIEWS ADD PRODUCT
        Route::get('add','ProductController@add')->name('products_add');
        Route::post('add','ProductController@save_add')->name('products_add');

        // ROUTE VIEWS EDIT PRODUCT
        Route::get('edit/{id}','ProductController@edit')->name('products_edit');
        Route::post('edit/{id}','ProductController@save_edit')->name('products_edit');

        // ROURE VIEWS DELETE PRODUCT
        Route::get('del/{id}','ProductController@delete')->name('products_del');
    });
           
?>