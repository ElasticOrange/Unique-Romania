<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('/', 'HomeController@postIndex');
Route::get('/login', 'HomeController@getLogin');
Route::get('/logged', 'HomeController@getLogged');

Route::controller('/endorser-gallery', 'EndorserGalleryController');
Route::controller('/gallery', 'GalleryController');
Route::controller('/entry', 'EntryController');
Route::controller('/final', 'FinalController');
