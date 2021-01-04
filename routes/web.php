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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('create','Cvcontroller@create');
Route::get('index','Cvcontroller@index');
Route::get('cv/{id}/edit','Cvcontroller@edit');
Route::post('store','Cvcontroller@store');
Route::put('cv/update/{id}','Cvcontroller@update');
Route::delete('cvs/{id}/destroy','Cvcontroller@destroy');