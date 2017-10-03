<?php

Route::get('/', 'StaticPagesController@index');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/photos', 'StaticPagesController@photos');
Route::get('/qui_sommes_nous', 'StaticPagesController@qui_sommes_nous');
Route::post('/contact_us', 'StaticPagesController@contact_us');
Route::get('/espace_presse', 'StaticPagesController@espace_presse');
Route::get('/tv_videos', 'StaticPagesController@tv_videos');
Route::get('/presse_ecrite', 'StaticPagesController@presse_ecrite');
//Join us Page 
Route::get('/join_us', 'JoinController@create');
Route::post('/join_us', 'JoinController@join_us');
// change language route
Route::get('language/{lang}', 'StaticPagesController@language')->where('lang', '[A-Za-z_-]+');

Auth::routes();
// Espace Admin
Route::resource('news', 'NewsController');
Route::resource('events', 'EventsController');
Route::resource('videos', 'YoutubevideosController');
Route::resource('articles', 'ArticlesController');


