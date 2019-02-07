<?php

Route::group(['prefix'=>'admin','middleware'=>['auth','checkadmin']],function(){
	Route::get('dashboard', [
		'uses'	=>	'Admin\AdminController@dashboard',
		'as'	=>	'admin.dashboard'
	]);
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
		'as'	=>	'admin.get_create_user'
	]);
	Route::post('users/create', [
		'uses'	=>	'Admin\AdminController@store',
		'as'	=>	'admin.post_create_user'
	]);
	Route::get('show/{user}', [
		'uses'	=>	'Admin\AdminController@show',
		'as'	=>	'admin.show_user'
	]);
	Route::get('users/{user}/edit', [
		'uses'	=>	'Admin\AdminController@edit',
		'as'	=>	'admin.get_edit_user'
	]);
	Route::post('users/{user}/edit', [
		'uses'	=>	'Admin\AdminController@update',
		'as'	=>	'admin.post_edit_user'
	]);
	Route::get('users/{user}', [
		'uses'	=>	'Admin\AdminController@destroy',
		'as'	=>	'admin.delete_user'
	]);	
	Route::get('profile', [
		'uses'	=>	'Admin\UserController@show',
		'as'	=>	'admin.view_profile'
	]);
	Route::get('profile/edit', [
		'uses'	=>	'Admin\UserController@edit',
		'as'	=>	'admin.get_edit_profile'
	]);
	Route::post('profile/{user}/edit', [
		'uses'	=>	'Admin\UserController@update',
		'as'	=>	'admin.post_edit_profile'
	]);
});



Route::group(['prefix'=>'users', 'middleware'=>['auth', 'checkuser'] ], function(){
	Route::get('dashboard', [
		'uses'	=>	'User\UserController@dashboard',
		'as'	=>	'user.dashboard'
	]);
	Route::get('posts', [
		'uses'	=>	'User\PostController@index',
		'as'	=>	'users.posts'
	]);
	Route::get('posts/create', [
		'uses'	=>	'User\PostController@create',
		'as'	=>	'user.get_create_post'
	]);
	Route::post('posts/create', [
		'uses'	=>	'User\PostController@store',
		'as'	=>	'user.post_create_post'
	]);
	Route::get('posts/view/{post}', [
		'uses'	=>	'User\PostController@show',
		'as'	=>	'user.view_post'
	]);
	Route::get('posts/edit/{post}', [
		'uses'	=>	'User\PostController@edit',
		'as'	=>	'user.get_edit_post'
	]);
	Route::post('posts/edit/{post}', [
		'uses'	=>	'User\PostController@update',
		'as'	=>	'user.post_edit_post'
	]);
	Route::get('profile', [
		'uses'	=>	'User\UserController@show',
		'as'	=>	'user.view_profile'
	]);
	Route::get('profile/{user}/edit', [
		'uses'	=>	'User\UserController@edit',
		'as'	=>	'user.get_edit_profile'
	]);
	Route::post('profile/{user}/edit', [
		'uses'	=>	'User\UserController@update',
		'as'	=>	'user.post_edit_profile'
	]);
});

Auth::routes();

Route::get('/', 'PostsController@posts')->name('home');

Route::get('single-post/{slug}', [
	'uses'	=>	'PostsController@post',
	'as'	=>	'public.single_post'
]);

Route::get('/about', function(){
	return view('public.about');
});

Route::get('/contact', function(){
	return view('public.contact');
});

Route::get('/post', function(){
	return view('public.post');
});

Route::post('summernoteeditor', [
	'uses'	=>	'SummernoteController@store',
	'as'	=>	'summernoteeditor.post'
]);

Route::get('/unauthorized',function(){
	return "unauthorized";

})->name('unauthorized');

Route::get('admin', function(){
		return 'layouts.admin.index';
});