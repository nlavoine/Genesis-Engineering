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

Route::get('/category/{category}', 'CategoryController@index')->name('category.index');

Route::get('/product/{product}', 'ProductController@show')->name('product.show');

Route::get('/addToCart/{id}', 'ProductController@addToCart')->name('product.addToCart');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::get('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

Route::post('/cart', 'CartController@update')->name('cart.update');

Route::get('/cart-details', 'CartController@details')->name('cart.details')->middleware('auth');

Route::get('/contact', 'ContactUsController@index')->name('contact.index');

route::get('/qui-sommes-nous', 'HomeController@about')->name('home.about');

route::get('/user', 'UserController@account')->name('user.account');

route::get('/secret', 'SecretController@index')->name('secret.index');

Route::resource('user', 'UserController')->middleware('auth');

Route::put('user/{user}/updatemdp', 'UserController@updatemdp')->name('user.updatemdp')->middleware('auth');

Route::get('user/{user}/editmdp', 'UserController@editmdp')->name('user.editmdp')->middleware('auth');

Route::get('user/address/{address}', 'UserController@address')->name('user.address')->middleware('auth');

Route::get('user/address/{address}/edit', 'UserController@editaddress')->name('user.editaddress')->middleware('auth');

Route::put('user/address/{address}/update', 'UserController@updateaddress')->name('user.updateaddress')->middleware('auth');

Route::get('user/order/{order}', 'UserController@order')->name('user.order')->middleware('auth');

/**
 * Routes Back_Office
 */
Route::prefix('admin')->name('admin.')->namespace('Backoffice')->group(function () {
    Route::get('', 'HomeController@index')->name('index')->middleware('role:sup_admin|admin');
    Route::resource('product', 'ProductController')->middleware('role:sup_admin|admin');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * ERREURS
 */
 Route::get('/forbidden', 'HomeController@forbidden')->name('home.forbidden');