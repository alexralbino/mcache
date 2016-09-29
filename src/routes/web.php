<?php

Route::group(['middleware' => ['web'], 'prefix' => config('admin.url')], function () {
    Route::group(['middleware' => ['auth.admin', 'auth.rules']], function () {
        Route::get('/mcache', ['uses' => 'McacheController@index', 'as' => 'admin.mcache.index']);
        Route::post('/mcache/{action}', ['uses' => 'McacheController@refresh', 'as' => 'admin.mcache.refresh']);
    });
});