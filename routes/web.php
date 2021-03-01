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

Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/edit/{id}', 'App\Http\Controllers\ProductController@edit');
Route::post('/update/{id}', 'App\Http\Controllers\ProductController@update')->name('update');
Route::get('/create', 'App\Http\Controllers\ProductController@create');
Route::post('/store', 'App\Http\Controllers\ProductController@store')->name('store');
Route::get('/delete/{id}', 'App\Http\Controllers\ProductController@delete');
Route::post('/remove/{id}', 'App\Http\Controllers\ProductController@remove')->name('remove');

Route::get('/product_ca', 'App\Http\Controllers\CleanArchitecture\ProductIndexController');
Route::get('/edit_ca/{id}', 'App\Http\Controllers\CleanArchitecture\ProductEditController');
Route::post('/update_ca/{id}', 'App\Http\Controllers\CleanArchitecture\ProductUpdateController')->name('update_ca');
Route::get('/create_ca', 'App\Http\Controllers\CleanArchitecture\ProductCreateController');
Route::post('/store_ca', 'App\Http\Controllers\CleanArchitecture\ProductStoreController')->name('store_ca');
Route::get('/delete_ca/{id}', 'App\Http\Controllers\CleanArchitecture\ProductDeleteController');
Route::post('/remove_ca/{id}', 'App\Http\Controllers\CleanArchitecture\ProductRemoveController')->name('remove_ca');
