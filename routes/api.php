<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['json.response']], function() {
    Route::get('/health', 'App\Http\Controllers\API\HealthController@index');
    Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('api.auth.login');

    Route::middleware('auth:api')->group(function () {
        Route::get('/timesheets/pending', 'App\Http\Controllers\API\TimesheetsController@pending');
        Route::get('/timesheets/approved', 'App\Http\Controllers\API\TimesheetsController@approved');
        Route::get('/timesheets/rejected', 'App\Http\Controllers\API\TimesheetsController@rejected');
    
        Route::get('/projects', 'App\Http\Controllers\API\ProjectsController@projects');
    
        Route::post('/project/create', 'App\Http\Controllers\API\ProjectController@create');
        Route::put('/project/update', 'App\Http\Controllers\API\ProjectController@update');
        Route::delete('/project/drop', 'App\Http\Controllers\API\ProjectController@drop');
    });
});