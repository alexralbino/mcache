<?php

Route::group(['prefix' => config('admin.url')], function () {

    Route::group(['middleware' => ['auth.admin', 'auth.rules']], function () {
        Route::get('/mcache', ['uses' => 'McacheAdminController@index', 'as' => 'admin.mcache.index']);
        Route::post('/mcache/{action}', ['uses' => 'McacheAdminController@refresh', 'as' => 'admin.mcache.refresh']);
    });

});