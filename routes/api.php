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

//List News articles

Route::get('news','NewsController@index');
//create News articles

Route::post('news','NewsController@store');

//list a single News article

Route::get('news/{id}','NewsController@show');

//update News articles
Route::put('news/{id}','NewsController@store');

//delete the News articles

Route::delete('news/{id}','NewsController@destroy');

Route::get('clear','NewsController@truncate');


