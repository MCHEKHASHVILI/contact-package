<?php
Route::group(['namespace'=>'Mikheil\Contact\Http\Controllers'], function(){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');
});

