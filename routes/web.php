<?php




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

	Route::get('users',[
		'uses'	=>	'Admin\AdminController@index',
		'as'	=>	'admin.users'
	]);
	Route::get('users/create', [
		'uses'	=>	'Admin\AdminController@create',
		'as'	=>	'user.get_create_user'
	]);
	Route::post('users/create', [
		'uses'	=>	'Admin\AdminController@store',
		'as'	=>	'user.post_create_user'
	]);
	Route::get('show/{user}', [
		'uses'	=>	'Admin\AdminController@show',
		'as'	=>	'user.show_user'
	]);
	Route::get('users/{user}/edit', [
		'uses'	=>	'Admin\AdminController@edit',
		'as'	=>	'user.get_edit_user'
	]);
	Route::post('users/{user}/edit', [
		'uses'	=>	'Admin\AdminController@update',
		'as'	=>	'user.post_edit_user'
	]);
	Route::get('users/{user}', [
		'uses'	=>	'Admin\AdminController@destroy',
		'as'	=>	'user.delete_user'
	]);	
});

Route::group(['prefix'=>'users'], function(){
	Route::get('profile', [
		'uses'	=>	'Admin\UserController@show',
		'as'	=>	'user.view_profile'
	]);
	Route::get('profile/{user}/edit', [
		'uses'	=>	'Admin\UserController@edit',
		'as'	=>	'user.get_edit_profile'
	]);
	Route::post('profile/{user}/edit', [
		'uses'	=>	'Admin\UserController@update',
		'as'	=>	'user.post_edit_profile'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
