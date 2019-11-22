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




Route::get('/','frontController@welcome');
Route::get('/singleProduct/{id}','frontController@singleProductView');
Route::get('/cart','CartController@index')->name('view_cart');

Route::get('/precheck','frontController@check')->name('check');

Route::get('/checkout','frontController@checkout')->middleware('customer')->name('checkout');
Route::get('/cart/add/{cart}','CartController@create')->name('addTo_cart');
Route::get('/cart/update','CartController@update')->name('update_cart');
Route::get('/cart/delete/{id}','CartController@destroy')->name('delete_cart');


Auth::routes();




Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //Category controller
    Route::get('/category', 'CategoryController@index')->name('category');
    Route::get('/category/create', 'CategoryController@create')->name('create_category');
    Route::post('/category/create', 'CategoryController@store')->name('store_category');
    Route::get('/category/{category}/edit', 'CategoryController@edit')->name('edit_category');
    Route::post('/category/{category}/update', 'CategoryController@update')->name('update_category');
    Route::post('/category/{category}/delete', 'CategoryController@destroy')->name('destroy_category');

    //Verification route
    Route::get('pendingList','verificationController@pendingList')->name('Pending_list');
    Route::get('/acceptList/{request}','verificationController@acceptList')->name('Accept_list');
    Route::post('/deleteList/{request}','verificationController@deleteList')->name('destroyShopper');
    Route::get('verifiedList','verificationController@verifiedList')->name('Verified_list');

});



Route::group(['middleware' => ['customer']], function () {

    Route::get('/customer', 'HomeController@customer');

});


Route::group(['middleware' => ['shopper']], function () {

    Route::get('/shopper', 'HomeController@shopper');

    //Product controller
    Route::get('/product/{product}', 'ProductController@index')->name('product');
    Route::get('/addProduct','ProductController@create');
    Route::post('/product/create', 'ProductController@store')->name('store_product');
    Route::get('/product/{product}/edit', 'ProductController@edit')->name('edit_product');
    Route::post('/product/{product}/update', 'ProductController@update')->name('update_product');
    Route::post('/product/{product}/delete', 'ProductController@destroy')->name('destroy_product');

    //Stock controller
    Route::get('/stock/{stock}', 'StockController@index')->name('stock');
    Route::get('/addStock/{stock}','StockController@create')->name('stock_create');
    Route::post('/stock/create', 'StockController@store')->name('store_stock');
    Route::get('/stock/{stock}/edit', 'StockController@edit')->name('edit_stock');
    Route::post('/stock/{stock}/update', 'StockController@update')->name('update_stock');
    Route::post('/stock/{stock}/delete', 'StockController@destroy')->name('destroy_stock');

    //Discount controller
    Route::get('/discount/{discount}', 'DiscountController@index')->name('discount');
    Route::get('/adddiscount/{discount}','DiscountController@create')->name('discount_create');
    Route::post('/discount/create', 'DiscountController@store')->name('store_discount');
    Route::get('/discount/{discount}/edit', 'DiscountController@edit')->name('edit_discount');
    Route::post('/discount/{discount}/update', 'DiscountController@update')->name('update_discount');
    Route::post('/discount/{discount}/delete', 'DiscountController@destroy')->name('destroy_discount');
    Route::post('/depend','DiscountController@dependValue');

});





