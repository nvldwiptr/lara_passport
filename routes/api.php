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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'API\v1\AuthController@register');
Route::post('/login', 'API\v1\AuthController@login');
Route::post('/logout', 'API\v1\AuthController@logout')->middleware('auth:api');

Route::apiResource('/ceo', 'API\v1\CEOController')->middleware('auth:api', 'json.response');
