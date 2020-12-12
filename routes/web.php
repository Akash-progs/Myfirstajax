<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sdetails','App\Http\Controllers\TestajaxController@index');
Route::get('/delete_data/{id}','App\Http\Controllers\TestajaxController@delete');
Route::post('/add_details','App\Http\Controllers\TestajaxController@save');