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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/productlist', 'ProductController@index')->name('product.index');

Route::get('/product/{product}', 'ProductController@show')->name('product.show');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::get('/cart-details', 'CartController@details')->name('cart.details');

Route::get('/contact', 'ContactUsController@index')->name('contact.index');

route::get('/qui-sommes-nous', 'HomeController@about')->name('home.about');

route::get('/user','UserController@account')->name('user.account');

route::get('/secret','SecretController@index')->name('secret.index');

route::get('/admin', 'Admin\HomeController@index')->name('admin.index');

route::prefix('admin')->name('admin.')->group(function() {
    route::get('products', 'Admin\HomeController@products')->name('products');
    route::get('users','Admin\HomeController@users')->name('users');
    route::get('orders','Admin\HomeController@orders')->name('orders');

});

route::resource('products', 'ProductsController');