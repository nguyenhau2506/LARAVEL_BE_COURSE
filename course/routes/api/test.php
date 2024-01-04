<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'test',
    'namespace' => 'App\Http\Controllers']
    , function () {
        Route::get('/users', 'TestController@users');
});