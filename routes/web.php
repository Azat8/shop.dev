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
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('register', 'Auth\RegisterController@register')->name('register');

Route::get('/', 'Pages\IndexController@show')->name('index');
Route::group(['prefix' => 'shop'],function (){
    Route::get('/', 'Pages\ProductController@product')->name('product');
    Route::get('sub', 'Pages\ProductController@sub')->name('sub');
    Route::get('page/{id}', 'Pages\PageController@page')->name('view.page');
});
Route::get('team', 'Pages\TeamController@team')->name('team');
Route::get('events', 'Pages\EventsController@events')->name('events');
Route::get('contact', 'Pages\ContactController@contact')->name('contact');
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::post('save', 'CategoryController@save')->name('category.save');
        Route::get('create', 'CategoryController@create')->name('category.create');
        Route::get('delete/{id}', 'CategoryController@delete')->name('category.delete');
        Route::post('update/{id}', 'CategoryController@update')->name('category.update');
        Route::get('edit/{id}', 'CategoryController@edit')->name('category.edit');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('product.index');
        Route::post('save', 'ProductController@save')->name('product.save');
        Route::get('create', 'ProductController@create')->name('product.create');
        Route::get('delete/{id}', 'ProductController@delete')->name('product.delete');
        Route::post('update/{id}', 'ProductController@update')->name('product.update');
        Route::get('edit/{id}', 'ProductController@edit')->name('product.edit');
    });
    Route::get('create-category', 'AdminCategoryController@create_category')->name('create_category');
});
