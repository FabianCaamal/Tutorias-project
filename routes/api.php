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
Route::post('/grupos/nuevo', 'api\angular@store');				// cread
Route::get('/grupos', 'api\angular@index');		    			// read
Route::post('/grupos/{id}/update', 'api\angular@update');		// update
Route::delete('/grupos/{id}/delete', 'api\angular@destroy');		// delete


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



