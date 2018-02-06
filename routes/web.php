<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
*  PRODUCTS
**/

//Route::group(['prefix'=>'products'/*, 'middleware'=>'AdminStatus::class'*/], function(){

	Route::resource('/products', 'Products\ProductsController');
	//Route::get('/product/{id}', 'Products\ProductsController@showItem');
	//Route::delete('/products/{id}', 'Products\ProductsController@destroy');

//});
/**
* WRITERS
**/

Route::resource('/writers','Writers\WritersController');
Route::get('writers/{id}/promeni','Writers\WritersController@editWriter');

/**
*  PRODUCT STOCKS
**/

Route::get('stocks', 'Products\ProductStockController@index')->name('product.stock');


/**
* COMPANIES
**/

Route::resource('/companies', 'Companies\CompaniesController');
Route::post('/companies/{company}/comments','Companies\CompanyCommentsController@store');

/*
*  GITHUB SOCIALITE
*/

Route::get('socialauth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('socialauth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');



/*
*  GOOGLE SOCIALITE
*/

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');