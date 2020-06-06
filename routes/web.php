<?php

use Illuminate\Support\Facades\Route;
use App\Shoe;
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
    $shoes = Shoe::all();
    return view('home',compact('shoes'));
});

Route::get('/create', 'ShoeController@create');
Route::post('/create', 'ShoeController@store');
Route::get('/edit/{id}', 'ShoeController@edit')->name('shoe.edit');
Route::patch('/edit/{id}', 'ShoeController@update')->name('shoe.patch');
Route::delete('/delete/{id}', 'ShoeController@destroy')->name('shoe.delete');