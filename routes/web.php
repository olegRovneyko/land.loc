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



Route::group(['middleware'=>'web'], function() {

	Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'us'=>'home']);
	Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'us'=>'page']);

	Route::auth();

});

//admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {

	//admin
	Route::get('/', function() {



	});


	//admin/pages
	Route::group(['prefix'=>'pages'], function() {

		//admin/pages
		Route::get('/', ['uses'=>'PageController@execute', 'us'=>'pages']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses'=>'PageAddController@execute', 'us'=>'pageAdd']);
		//admin/edit/x
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PageEditController@execute', 'us'=>'pageEdit']);

	});

	Route::group(['prefix'=>'portfolios'], function() {

		Route::get('/', ['uses'=>'PortfolioController@execute', 'us'=>'portfolios']);

		Route::match(['get', 'post'], '/add', ['uses'=>'PortfolioAddController@execute', 'us'=>'portfolioAdd']);
		Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfolioEditController@execute', 'us'=>'portfolioEdit']);

	});

	Route::group(['prefix'=>'services'], function() {

		Route::get('/', ['uses'=>'ServiceController@execute', 'us'=>'services']);

		Route::match(['get', 'post'], '/add', ['uses'=>'ServiceAddController@execute', 'us'=>'serviceAdd']);
		Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServiceEditController@execute', 'us'=>'serviceEdit']);

	});

});
