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
    return view('website');
 });

Route::get('buku-datatable', 'BukuController@dataTable')->name('buku-datatable.index');
Route::get('/website', 'MyController@website')->name('website');
Route::resource('buku', 'BukuController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');