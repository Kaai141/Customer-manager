<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


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

Route::get('customers', 'App\Http\Controllers\CustomerController@index')->name('customers.list');
Route::get('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create');
Route::post('/customers/store', 'App\Http\Controllers\CustomerController@store');
Route::post('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
Route::get('/customers/view/{id}', 'App\Http\Controllers\CustomerController@show');
Route::delete('/customers/delete/{id}', 'App\Http\Controllers\CustomerController@destroy');



