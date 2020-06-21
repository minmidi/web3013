<?php 
    Route::group(['prefix' => 'galleries'], function () {

        // ROUTE VIEWS PRODUCRS
        Route::get('/','galleriesController@index')->name('galleries');
        
        // ROUTE VIEWS ADD PRODUCT
        Route::get('add','galleriesController@add')->name('galleries_add');
        Route::post('add','galleriesController@save_add')->name('galleries_add');

        // ROUTE VIEWS EDIT PRODUCT
        Route::get('edit/{id}','galleriesController@edit')->name('galleries_edit');
        Route::post('edit/{id}','galleriesController@save_edit')->name('galleries_edit');

        // ROURE VIEWS DELETE PRODUCT
        Route::get('del/{id}','galleriesController@delete')->name('galleries_del');
    });
?>