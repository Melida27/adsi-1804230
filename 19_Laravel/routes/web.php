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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@welcome');

Route::get('usuarios', function (){
	//$users = App\User::all();
	$users = App\User::take(50)->get();
	foreach ($users as $user) {
		echo "<li>".$user->fullname."</li>";
	}
});

Route::get('categorias', function (){
	//$categories = App\Category::all();
	$categories = App\Category::take(50)->get();
	foreach ($categories as $Category) {
		echo "<li>".$Category->name."</li>";
	}
});

// Resources (Todos los métodos necesarios para un CRUD)
Route::group(['middleware' => 'admin'], function(){
	Route::resource('users', 'UserController');
	Route::resource('categories', 'CategoryController');
	Route::resource('articles', 'ArticleController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Reports (Export)
Route::get('generate/pdf/users', 'UserController@pdf');
Route::get('generate/excel/users', 'UserController@excel');

Route::get('generate/pdf/categories', 'CategoryController@pdf');
Route::get('generate/excel/categories', 'CategoryController@excel');

Route::get('generate/pdf/articles', 'ArticleController@pdf');
Route::get('generate/excel/articles', 'ArticleController@excel');

//Imports (Excel)
Route::post('import/excel/users', 'UserController@import');
Route::post('import/excel/categories', 'CategoryController@import');
Route::post('import/excel/articles', 'ArticleController@import');

Route::get('redirect', function(){
	alert()->basic('Basic Message', 'Mandatory Title')->autoclose(3500);
	return redirect('/');
});

//Search AJAX
Route::post('users/search', 'UserController@search');
Route::post('categories/search', 'CategoryController@search');
Route::post('articles/search', 'ArticleController@search');

//Filter AJAX
Route::post('artsbycat', 'HomeController@artsbycat');

//Role Editor
Route::get('mydata', 'UserController@mydata');
Route::put('mydata/{id}', 'UserController@updmydata');

Route::get('myarticles', 'ArticleController@myarticles');
Route::get('editor/articles/create', 'ArticleController@edcreate');
Route::post('editor/articles', 'ArticleController@edstore');
Route::get('editor/articles/{id}', 'ArticleController@edshow');
Route::get('editor/articles/{id}/edit', 'ArticleController@ededit');
Route::put('editor/articles/{id}', 'ArticleController@edupdate');
Route::delete('editor/articles/{id}', 'ArticleController@eddelete');