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


/**
 * Routes Front_Office
 */
Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/productlist/{sortby}', 'ProductController@index')->name('product.index');

Route::get('/product/{product}', 'ProductController@show')->name('product.show');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::get('/cart-details', 'CartController@details')->name('cart.details')->middleware('auth');

Route::get('/contact', 'ContactUsController@index')->name('contact.index');

route::get('/qui-sommes-nous', 'HomeController@about')->name('home.about');

route::get('/user','UserController@account')->name('user.account');

route::get('/secret','SecretController@index')->name('secret.index');

/**
 * Routes Back_Office
 */
Route::prefix('admin')->name('admin.')->namespace('Backoffice')->group(function () {
    Route::get('', 'HomeController@index')->name('index');
    Route::resource('product', 'ProductController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
