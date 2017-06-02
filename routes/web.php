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

Route::get('/', 'PagesController@welcome_page')->name('index');
Route::get('/portfolio', 'PagesController@portfolio')->name('portfolio');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/albums', 'PagesController@albums')->name('albums');
Route::get('/album/{slug}', 'PagesController@album_single')->name('album_single');
// Route::get('/shop', 'PagesController@shop')->name('shop');

Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::post('/contacts', 'PagesController@contacts_mail')->name('contacts_mail');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/', 'AdminPagesController@index_admin')->name('admin.index');
	Route::get('/albums', 'AdminPagesController@index_admin')->name('admin.albums');
	// Route::get('/shop', 'AdminPagesController@index_admin')->name('admin.shop');

	Route::resource('/portfolio', 'PortfolioController');
	Route::get('/portfolio/delete/{id}', 'PortfolioController@deleteImg')->name('portfolio.deleteImg');

	Route::resource('/albums_category', 'AlbumsCategoryController');
	Route::resource('/albums', 'AlbumsController');
	Route::get('/albums/delete/{id}', 'AlbumsController@deleteImg')->name('albums.deleteImg');

	Route::get('/album/delete/{id}', 'AlbumsCategoryController@deleteAlbum')->name('albums.deleteAlbum');
});

