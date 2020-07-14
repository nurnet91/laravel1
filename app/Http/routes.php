<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/clear', function (){
//     return Artisan::call('cache:clear');
// 	return redirect('/');
// });
// Route::get('/password', 					'HomeController@getPassword');

Route::get('/', 							'HomeController@index');

Route::auth();

Route::get('/home', 						'HomeController@index');
Route::get('/search', 						'HomeController@search');

Route::get('/profile', 						'ProfileController@index');
Route::get('/profile/{type}', 				'ProfileController@index');
Route::post('/editProfile', 				'ProfileController@edit');
Route::post('/profile/edit', 				'ProfileController@change');

Route::get('/tasks', 						'TaskController@index');
Route::post('/task', 						'TaskController@store');
Route::delete('/task/{task}', 				'TaskController@destroy');

Route::get('/reports', 						'ReportController@index');
Route::get('/reports/{id}', 				'ReportController@view');
Route::get('/reports/add', 					'ReportController@add');
Route::post('/reports/create', 				'ReportController@create');
Route::get('/reports/edit/{id}', 			'ReportController@edit');
Route::post('/reports/update/{id}', 		'ReportController@update');
Route::delete('/reports/distory/{id}',		'ReportController@distory');
Route::get('/reports/status/{id}',			'ReportController@editstatus');
Route::get('/reports/data', 				'ReportController@data');
Route::get('/reports/delimg/{id}', 			'ReportController@deleteimage');

Route::get('/numbers', 						'NumberController@index');
Route::get('/numbers/{id}', 				'NumberController@view');
Route::get('/numbers/add', 					'NumberController@add');
Route::post('/numbers/create', 				'NumberController@create');
Route::get('/numbers/edit/{id}', 			'NumberController@edit');
Route::post('/numbers/update/{id}', 		'NumberController@update');
Route::delete('/numbers/distory/{id}',		'NumberController@distory');
Route::get('/numbers/status/{id}',			'NumberController@editstatus');
Route::get('/numbers/data', 				'NumberController@data');
Route::get('/numbers/delimg/{id}', 			'NumberController@deleteimage');

Route::get('/categories', 					'CategoryController@index');
Route::get('/categories/{id}', 				'CategoryController@view');
Route::get('/categories/add', 				'CategoryController@add');
Route::post('/categories/create', 			'CategoryController@create');
Route::get('/categories/edit/{id}', 		'CategoryController@edit');
Route::post('/categories/update/{id}',		'CategoryController@update');
Route::delete('/categories/distory/{id}',	'CategoryController@distory');
Route::get('/categories/status/{id}',		'CategoryController@editstatus');
Route::get('/categories/data', 				'CategoryController@data');
Route::get('/categories/delimg/{id}', 		'CategoryController@deleteimage');

Route::get('/rukns', 						'RuknController@index');
Route::get('/rukns/{id}', 					'RuknController@view');
Route::get('/rukns/add', 					'RuknController@add');
Route::post('/rukns/create', 				'RuknController@create');
Route::get('/rukns/edit/{id}', 				'RuknController@edit');
Route::post('/rukns/update/{id}',			'RuknController@update');
Route::delete('/rukns/distory/{id}',		'RuknController@distory');
Route::get('/rukns/status/{id}',			'RuknController@editstatus');
Route::get('/rukns/asosiy/{id}',			'RuknController@editasosiy');
Route::get('/rukns/sahifa/{id}',			'RuknController@editsahifa');
Route::get('/rukns/data', 					'RuknController@data');
Route::get('/rukns/delimg/{id}', 			'RuknController@deleteimage');

Route::get('/galleries', 					'GalleryController@index');
Route::get('/galleries/{id}', 				'GalleryController@view');
Route::get('/galleries/add', 				'GalleryController@add');
Route::post('/galleries/create', 			'GalleryController@create');
Route::get('/galleries/edit/{id}', 			'GalleryController@edit');
Route::post('/galleries/update/{id}',		'GalleryController@update');
Route::delete('/galleries/distory/{id}',	'GalleryController@distory');
Route::get('/galleries/status/{id}',		'GalleryController@editstatus');
Route::get('/galleries/asosiy/{id}',		'GalleryController@editasosiy');
Route::get('/galleries/data', 				'GalleryController@data');
Route::get('/galleries/delimg/{id}', 		'GalleryController@deleteimage');

Route::get('/fotos', 						'FotoController@index');
Route::get('/fotos/{id}', 					'FotoController@view');
Route::get('/fotos/add', 					'FotoController@add');
Route::post('/fotos/create', 				'FotoController@create');
Route::get('/fotos/edit/{id}', 				'FotoController@edit');
Route::post('/fotos/update/{id}',			'FotoController@update');
Route::delete('/fotos/distory/{id}',		'FotoController@distory');
Route::get('/fotos/status/{id}',			'FotoController@editstatus');
Route::get('/fotos/data', 					'FotoController@data');
Route::get('/fotos/delimg/{id}', 			'FotoController@deleteimage');

Route::get('/messages', 					'MessageController@index');
Route::get('/messages/{id}', 				'MessageController@view');
Route::delete('/messages/distory/{id}',		'MessageController@distory');
Route::get('/messages/view/{id}',			'MessageController@editview');
Route::get('/messages/data', 				'MessageController@data');



Route::get('/pages/tahririyat', 			'PageController@tahririyat');
Route::post('/pages/tahririyat', 			'PageController@tahririyat');

Route::get('/pages/gazeta', 				'PageController@gazeta');
Route::post('/pages/gazeta', 				'PageController@gazeta');

Route::get('/pages/rahbariyat', 			'PageController@rahbariyat');
Route::post('/pages/rahbariyat', 			'PageController@rahbariyat');

Route::get('/pages/bulimlar', 				'PageController@bulimlar');
Route::post('/pages/bulimlar', 				'PageController@bulimlar');

Route::get('/pages/obuna', 					'PageController@obuna');
Route::post('/pages/obuna', 				'PageController@obuna');

Route::get('/pages/contact', 				'PageController@contact');
Route::post('/pages/contact', 				'PageController@contact');



Route::get('/banners/banner1', 				'BannerController@banner1');
Route::post('/banners/banner1', 			'BannerController@banner1');

Route::get('/banners/banner2', 				'BannerController@banner2');
Route::post('/banners/banner2', 			'BannerController@banner2');

Route::get('/banners/banner3', 				'BannerController@banner3');
Route::post('/banners/banner3', 			'BannerController@banner3');

Route::get('/banners/banner4', 				'BannerController@banner4');
Route::post('/banners/banner4', 			'BannerController@banner4');





Route::post('/contact/send', 				'HomeController@contactSend');





Route::get('/sonlar', 						'HomeController@sonlar');
Route::get('/morereaded', 					'HomeController@morereaded');
Route::get('/xabarlar/{id}', 				'HomeController@xabarlar');
Route::get('/sonlar/{id}', 					'HomeController@index');
Route::get('/ruknlar/{id}', 				'HomeController@ruknlar');
Route::get('/kategoriyalar/{id}', 			'HomeController@kategoriyalar');



Route::get('/tahririyat', 					'HomeController@tahririyat');
Route::get('/gazeta', 						'HomeController@gazeta');
Route::get('/rahbariyat', 					'HomeController@rahbariyat');
Route::get('/bulimlar', 					'HomeController@bulimlar');
Route::get('/galeriya', 					'HomeController@galeriyalar');
Route::get('/galeriya/{id}', 				'HomeController@galeriya');
Route::get('/obuna', 						'HomeController@obuna');
Route::get('/aloqa', 						'HomeController@contact');



