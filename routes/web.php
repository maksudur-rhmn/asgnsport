<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MatchResultController;
use App\Http\Controllers\MatchStatisticController;
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// BannerController
Route::resource('banners', 'BannerController');
// END BannerController

// MatchResultController
Route::get('/match/result', 'MatchResultController@index')->name('match_result.index');
Route::post('/match/post', 'MatchResultController@store')->name('match_result.store');
// END MatchResultController

//   FrontendController
Route::get('/', 'FrontendController@index')->name('home');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/fixture', 'FrontendController@fixture')->name('fixture');
Route::get('/players', 'FrontendController@players')->name('players');
Route::get('/players/{player_id}/details', 'FrontendController@playerDetails')->name('player.details');
Route::get('/scouts', 'FrontendController@scouts')->name('scouts');
Route::get('/news', 'FrontendController@news')->name('news.index');
Route::get('/news/{news_id}/single', 'FrontendController@single')->name('news.single');
Route::get('/blogs', 'FrontendController@blogs')->name('blog.index');
Route::get('/blogs/{blog_id}/single', 'FrontendController@blogsingle')->name('blogs.single');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact/post', 'FrontendController@contactpost')->name('contact.post');
//   END FrontendController

// MatchStatisticController
Route::get('/match/statisctics', 'MatchStatisticController@index')->name('match_statistics.index');
Route::post('/match/statistic/store', 'MatchStatisticController@store')->name('match_statistic.store');
// END MatchStatisticController

// VideoController 
Route::get('/videos', 'VideoController@index');
// END VideoController

// AboutPlayersController
Route::get('/about/players', 'AboutPlayersController@index')->name('about.players');
Route::post('about/players/post', 'AboutPlayersController@post')->name('aboutplayer.post');
// END AboutPlayersController

// NewsController
Route::get('/nes/back', 'NewsController@index')->name('news');
Route::post('/nes/store', 'NewsController@store')->name('news.store');
// END NewsController

// BlogController
Route::get('/blo/back', 'BlogController@index')->name('blog');
Route::post('/blo/store', 'BlogController@store')->name('blog.store');
// END BlogController

// SubscriberController
Route::post('/sub', 'SubscriberController@post')->name('subscriber.store');
// END SubscriberController