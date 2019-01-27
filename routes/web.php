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

});
