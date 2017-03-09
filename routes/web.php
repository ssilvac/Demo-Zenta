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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::group(['middleware' => 'auth','prefix' => 'dashboard'], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    // PROFILE
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::get('profile/edit', 'ProfileController@edit')->name('profile_edit');
    Route::put('profile/{id}', 'ProfileController@update')->name('profile_update');

    // POST
    Route::get('posts', 'PostController@index')->name('posts_index');
    Route::get('posts/create', 'PostController@create')->name('posts_create');
    Route::post('posts', 'PostController@store')->name('posts_store');
    Route::get('posts/{id}', 'PostController@show')->name('posts_show');
    Route::get('posts/{id}/edit', 'PostController@edit')->name('posts_edit');
    Route::put('posts/{id}', 'PostController@update')->name('posts_update');
    Route::delete('posts/{id}', 'PostController@destroy')->name('posts_destroy');


    //Route::resource('posts', 'PostController');


/*




    /*
    Route::get('posts/edit/{$i}', 'PostController@edit')->name('post_edit');
    Route::post('posts', 'PostController@save')->name('post_crate');
    Route::post('posts', 'PostController@update')->name('post_update');
    */
});
