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

// Check the admin is authenticated before letting him edit things on the database
Route::group(
    array('before' => 'admin_auth')
    , function()
    {
        Route::controller('/admin/entry', 'AdminEntryController');
        Route::controller('/admin/', 'AdminController');
    }
);

// Define the Login controller
Route::controller('/admin/login', 'AdminLoginController');
Route::controller('/admin/user', 'AdminUserController');

// The filter that checks if the user is logged in
Route::filter(
    'admin_auth'
    , function()
    {
        if (!Session::get('admin'))
        {
            return Redirect::to('/admin/login');
        }
    }
);
