<?php

Route::group(['namespace' => 'App\Modules\Employee\Controllers'], function() {
    Route::get('/', 'SallaryController@json');
});
