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

Route::get('/', 'PagesController@welcome');
Route::get('/companies', 'PagesController@companies');
Route::get('/about', 'PagesController@about');
Route::get('/writing/articles', 'PagesController@articles');
Route::get('/writing/books', 'PagesController@books');
Route::get('/coding', 'PagesController@coding');
Route::get('/podcasting', 'PagesController@podcasting');
Route::get('/music', 'PagesController@music');
Route::get('/consulting', 'PagesController@consulting');