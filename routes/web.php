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

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');


Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/portfolios', 'PortfolioController@index')->name('portfolio');
    Route::get('/portfolios/create', 'PortfolioController@create')->name('portfolio.create');
    Route::post('/portfolios/add', 'PortfolioController@add')->name('portfolio.add');
    Route::put('/portfolios', 'PortfolioController@edit')->name('portfolio.edit');
    Route::get('/portfolios/{portfolio}', 'PortfolioController@destroy')->name('portfolio.destroy');

    Route::get('/bundles', 'BundleController@index')->name('bundle');
    Route::get('/bundles/create', 'BundleController@create')->name('bundle.create');
    Route::post('/bundles/add', 'BundleController@add')->name('bundle.add');
    Route::put('/bundles', 'BundleController@edit')->name('bundle.edit');
    Route::get('/bundles/{bundle}', 'BundleController@destroy')->name('bundle.destroy');
});
