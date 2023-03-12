<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** main */

Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('chats', 'App\Http\Controllers\ChatController');
Route::resource('tags', 'App\Http\Controllers\TagController');
Route::resource('settings', 'App\Http\Controllers\SettingsController');
Route::resource('calendar', 'App\Http\Controllers\Main\CalendarController')->only('index');

/** errors */
Route::put('error', 'App\Http\Controllers\Main\ErrorController@index')->name('error.build-in-progress');
/** ./errors */

/** ./main */



/** admin */
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
//    Route::resources([
//        'posts' => \App\Http\Controllers\Admin\PostController::class,
//    ]);
    Route::get('posts', 'PostController@index');
});
/** ./admin */



/** sitemap */
Route::get('/sitemap.xml', 'App\Http\Controllers\SitemapController@index');

Route::get('/sitemap', 'SitemapController@index');
Route::get('/sitemap/posts', 'SitemapController@posts');
Route::get('/sitemap/categories', 'SitemapController@categories');
Route::get('/sitemap/tags', 'SitemapController@tags');
/** ./sitemap */


Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
