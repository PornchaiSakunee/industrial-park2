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
use App\Http\Middleware\langMiddleware;

//public
Route::group(['middleware' => ['langMiddleware']],function(){

	Route::get('/', "industrial_park\indexController@index");
	Route::get('branch/{id}',"industrial_park\industrialBranchController@index");
	//set lang
	route::get('lang/{id}',"setLangController@setlang");
	route::get('overview','industrial_park\overviewController@index');
	route::get('news-evente/{id}','industrial_park\indexController@news_event');
	route::get('detail/{id}','industrial_park\indexController@detail');
	//action page 
	route::get('action/{id}','industrial_park\actionController@index');
	route::get('action-view/{id}','industrial_park\actionController@view');
});

Route::prefix('utility')->group(function () {
	 //utility
	Route::group(['middleware' => ['langMiddleware']],function(){
		route::get('all','industrial_park\utilityCrotroller@get_utility');
		route::get('commercial','industrial_park\utilityCrotroller@commercial');
		route::get('power_supply','industrial_park\utilityCrotroller@power_supply');
		route::get('security','industrial_park\utilityCrotroller@security');
		route::get('treatment','industrial_park\utilityCrotroller@treatment');
		route::get('flood_prevention',
			'industrial_park\utilityCrotroller@flood_prevention');
		route::get('roads','industrial_park\utilityCrotroller@roads');
		route::get('telecommunications',
			'industrial_park\utilityCrotroller@telecommunications');
	});
    
});

  

//admin
Route::group(['middleware' => ['auth','langMiddleware']],function (){

	Route::get(
		"spiadm","industrial_park\admin\spiadmController@index"
	)->name('spiadm');

	Route::get(
		"user","industrial_park\admin\userController@user"
	)->name('user');

	Route::get(
		"user_add","industrial_park\admin\userController@user_add"
	)->name('user_add');

	Route::get(
		"menuAdd","industrial_park\admin\spiadmController@menuAdd"
	)->name('menuAdd');

	Route::post(
		"editPage","industrial_park\admin\spiadmController@editPage"
	)->name('editPage');
	Route::post(
		"updatePage","industrial_park\admin\spiadmController@updatePage"
	)->name('updatePage');

	Route::get(
		"addPage","industrial_park\admin\spiadmController@addPage"
	)->name('addPage');
	Route::post(
		"insertPage","industrial_park\admin\spiadmController@insertPage"
	)->name('insertPage');
	//img Upload
	Route::post(
		"imgUpload","industrial_park\admin\spiadmController@imgUpload"
	)->name('imgUpload');
	//img Remove
	Route::get(
		"imgRemove/{name}","industrial_park\admin\spiadmController@imgRemove"
	)->name('imgRemove');

	Route::get(
		"listPage","industrial_park\admin\spiadmController@listPage"
	)->name('listPage');
	

	Route::get(
		"news/{stnew}","industrial_park\admin\hnewsController@index"
	)->name('news');

	Route::get(
		"add_news","industrial_park\admin\hnewsController@add_news"
	)->name('add_news');

	Route::post(
		"news_insert","industrial_park\admin\hnewsController@insert"
	)->name('news_insert');

	Route::post(
		"news_edit","industrial_park\admin\hnewsController@edit"
	)->name('news_edit');
	Route::post(
		"news_update","industrial_park\admin\hnewsController@update"
	)->name('news_update');

	Route::post(
		"news_del","industrial_park\admin\hnewsController@del"
	)->name('news_del');

	Route::get("logout","Auth\LoginController@logout");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
