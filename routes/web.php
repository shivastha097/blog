<?php


Route::get('/', function () {
    return view('layouts.admin.index');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('categories',[
		'uses'=>'Admin\CategoryController@index',
		'as'=>'admin.categories',
	]);
	Route::get('categories/create',[
		'uses'=>'Admin\CategoryController@create',
		'as'=>'admin.get_create_categories',
	]);
	Route::post('categories/create',[
		'uses'=>'Admin\CategoryController@store',
		'as'=>'admin.post_create_categories',
	]);
	Route::get('categories/{category}/edit', [
		'uses'	=>	'Admin\CategoryController@edit',
		'as'	=>	'admin.get_edit_category',
	]);
	Route::post('categories/{category}/edit', [
		'uses'	=>	'Admin\CategoryController@update',
		'as'	=>	'admin.post_edit_categories',
	]);
	Route::get('categories/{category}', [
		'uses'	=> 'Admin\CategoryController@destroy',
		'as'	=>	'admin.get_delete_category'
	]);

	Route::get('posts', [
		'uses'	=>	'Admin\PostController@index',
		'as'	=>	'admin.posts'
	]);
	Route::get('posts/{post}/view', [
		'uses'	=>	'Admin\PostController@show',
		'as'	=>	'admin.view_post'
	]);
	Route::get('posts/create', [
		'uses'	=>	'Admin\PostController@create',
		'as'	=>	'admin.get_create_post'
	]);
	Route::post('posts/create', [
		'uses'	=>	'Admin\PostController@store',
		'as'	=>	'admin.post_create_post'
	]);
	Route::get('posts/{post}/edit', [
		'uses'	=>	'Admin\PostController@edit',
		'as'	=>	'admin.get_edit_post'
	]);
	Route::post('posts/{post}/edit', [
		'uses'	=>	'Admin\PostController@update',
		'as'	=>	'admin.post_edit_post'
	]);
	Route::get('posts/{post})', [
		'uses'	=>	'Admin\PostController@destroy',
		'as'	=>	'admin.delete_post'
	]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
