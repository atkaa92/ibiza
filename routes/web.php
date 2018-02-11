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

Route::get('/login', function () {
    return view('auth.login');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::get('/', 'PagesController@home');
        Route::get('/about', 'PagesController@about');
        Route::get('/rooms', 'PagesController@rooms');
        Route::get('/room/{id}', 'PagesController@room');
        Route::get('/gallery', 'PagesController@gallery');
        Route::get('/contacts', 'PagesController@contacts');
    }
);

Route::post('/sentMail', 'PagesController@sentMail');


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth',]], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/features', 'Admin\FeaturesController@features');
    Route::get('/new-feature', 'Admin\FeaturesController@newFeature');
    Route::post('/add-feature', 'Admin\FeaturesController@addNewFeature');
    Route::post('/edit-feature/{id}', 'Admin\FeaturesController@editFeature');
    Route::post('/delete-feature/{id}', 'Admin\FeaturesController@deleteFeature');


    Route::get('/rooms', 'HomeController@rooms');
    Route::get('/new-room', 'HomeController@newRooms');


    Route::get('/rooms', 'Admin\RoomsController@rooms');
    Route::get('/new-room', 'Admin\RoomsController@newRoom');
    Route::post('/add-room/{id?}', 'Admin\RoomsController@addRoomFunc');
});
