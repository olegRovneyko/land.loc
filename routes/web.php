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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['midleware'=>'web'], function() {

	Route::match(['get', 'post'], '/', ['uses'=>'indexController@execute', 'us'=>'home']);
	Route::get('/page/{alias}', ['uses'=>'pageController@execute', 'us'=>'page']);

	Route::auth();

});

//admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {

	//admin
	Route::get('/', function() {



	});

	//admin/pages
	Route::group(['prefix'=>'pages'], finction() {

		//admin/pages
		Route::get('/', ['uses'=>'pagesController@execute', 'us'=>'pages']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses'=>'pagesAddController@execute', 'us'=>'pegasAdd']);
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'pagesEditController@execute', 'us'=>'pagesEdit']);

	});

});
