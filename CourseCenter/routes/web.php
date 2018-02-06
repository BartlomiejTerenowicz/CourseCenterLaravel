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

Route::get('/contact', "PagesController2@contact");
Route::get('/about', 'PagesController2@about');
/* Video actions*/
/*
/ funkcja anonimowa
 */

/* kontrolere */

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    Route::post('/videos','VideosController@store');
    Route::get('/videos','VideosController@index');
    Route::get('/videos/create','VideosController@create');
    Route::get('/videos/{id}','VideosController@show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
