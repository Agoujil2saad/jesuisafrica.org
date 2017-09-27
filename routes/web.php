<?php

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

Route::get('/', 'StaticPagesController@index');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/photos', 'StaticPagesController@photos');
Route::get('/qui_sommes_nous', 'StaticPagesController@qui_sommes_nous');
Route::get('/espace_presse', 'StaticPagesController@espace_presse');

// change language route
Route::get('language/{lang}', 'StaticPagesController@language')->where('lang', '[A-Za-z_-]+');

