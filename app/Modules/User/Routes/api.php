<?php

Route::group(['namespace' => 'App\Modules\User\Controllers'], function() {
    Route::get('/', 'UserController@json');
});
