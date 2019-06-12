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

Auth::routes(['verify' => true]);

Route::get('/', 'PostController@index');

Route::resource('post', 'PostController');

Route::get('category/{id}/{slug}', 'PostController@getByCategory')->name('category');

Route::post('/search', 'PostController@search')->name('search');

Route::resource('comment', 'CommentController');

Route::get('user/{id}', 'ProfileController@getPostsByUser')->name('profile');

Route::get('user/{id}/comments', 'ProfileController@getCommentsByUser')->name('user_comments');

Route::get('/settings', 'ProfileController@settings')->name('settings');

Route::post('/settings', 'ProfileController@updateProfile')->name('settings');

Route::resource('page', 'PageController');

Route::get('/dashboard', ['as'=>'dashboard','uses'=>'admin\DashController@index'])->middleware('Admin');

Route::group(['prefix' => 'admin',  'middleware' => 'Admin'], function(){
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
    Route::resource('posts', 'admin\PostController');
    Route::get('permission', 'admin\PermissionController@index')->name('permissions');
    Route::post('permission', 'admin\RoleController@store')->name('permissions');
});

Route::post('permission/byRole', ['as'=>'permission_byRole','uses'=>'admin\RoleController@getByRole'])->middleware('Admin');





