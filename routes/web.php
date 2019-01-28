<?php


Route::get('/', function () {
    return view('layouts.admin.index');
});

Route::group(['prefix'=>'admin'],function(){
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
	// Route::get('posts', [
	// 	'uses'	=>	'Admin\PostController@index',
	// 	'as'	=>	'admin.posts'
	// ]);

});
