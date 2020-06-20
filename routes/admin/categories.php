<?php 
    Route::group(['prefix' => 'categories'], function () {

        // ROUTE VIEWS PRODUCRS
        Route::get('/','CategoryController@index')->name('categories');
        
        // ROUTE VIEWS ADD PRODUCT
        Route::get('add','CategoryController@add')->name('categories_add');
        Route::post('add','CategoryController@save_add')->name('categories_add');

        // ROUTE VIEWS EDIT PRODUCT
        Route::get('edit/{id}','CategoryController@edit')->name('categories_edit');
        Route::post('edit/{id}','CategoryController@save_edit')->name('categories_edit');

        // ROURE VIEWS DELETE PRODUCT
        Route::get('del/{id}','CategoryController@delete')->name('categories_del');
    });
?>