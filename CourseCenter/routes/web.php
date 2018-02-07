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
Route::get('/', 'PagesController2@index');
Route::get('/contact', "PagesController2@contact");
Route::get('/about', 'PagesController2@about');
Route::get('/home', 'PagesController2@index');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('/register', 'Auth\RegisterController@register');
/* Video actions*/
/*
/ funkcja anonimowa
 */

/* kontrolere */

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['web']], function () {
    /*Route::post('/videos','VideosController@store');
    Route::get('/videos','VideosController@index');
    Route::get('/videos/create','VideosController@create');
    Route::get('/videos/{id}','VideosController@show');*/

    Route::resource('videos','VideosController');
});
