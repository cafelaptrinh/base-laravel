<?php
Route::prefix('cate')->name('cate.')->middleware('isAdmin')->group(function(){
    Route::get('/','CategoryController@index')->name('index');

    Route::post('store','CategoryController@store')->name('store');

    Route::any('status/{id}','CategoryController@status')->name('status');

    Route::any('delete/{id}','CategoryController@delete')->name('delete');

    Route::get('edit/{id}','CategoryController@edit')->name('edit');

    Route::post('update/{id}','CategoryController@update')->name('update');
});