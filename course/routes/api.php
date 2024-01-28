<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::prefix('test')->group(function () {
//     Route::get('/users', function () {
//         return response()->json([
//             'name' => 'Abigail',
//             'state' => 'CA'
//         ]);
//     });
// });
// Route::group([
//     'namespace' => 'App\Http\Controllers']
//     , function () {
//         Route::get('classes', 'ClassController@index');
// });
include_once __DIR__ . '/api/test.php';
Route::group([]
    , function () {
        Route::apiResource('classes', ClassController::class);
});
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace'=> 'App\Http\Controllers'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
