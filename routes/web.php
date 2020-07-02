<?php

use App\Http\Controllers\vacanciesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/', 'vacanciesController');
Route::get('/Cevents','CeventsController@index');
Route::get('/Cevents','CeventsController@allevents');
Route::get('/resources', 'PostsController@index');

Route::get('{id}/file-download',['as'=>'file-download','uses'=>'CeventsController@download']);
