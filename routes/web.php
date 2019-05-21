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

Route::get('/',[
    'uses'=>'HomeController@list',
    'as'=>'top'
]);
Route::get('/profile',[
    'uses'=>'PostsController@create',
    'as'=>'post.create'
]);
Route::get('/redirect','SocialFacebookController@redirect')->name('facebook');
Route::get('/auth/facebook/callback','SocialFacebookController@callback')->name('facebookcallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/index',[
    'uses'=>'ProfileController@index',
    'as'=>'profile.index'
]);
Route::post('/profile/update',[
    'uses'=>'ProfileController@update',
    'as'=>'profile.update'
]);
Route::post('/post/store',[
    'uses'=>'PostsController@store',
    'as'=>'post.store'
]);
Route::get('/post/show',[
    'uses'=>'PostsController@show',
    'as'=>'post.show'
]);
Route::get('/post/single/{post}',[
    'uses'=>'HomeController@single',
    'as'=>'single.show'
]);
Route::get('/post/edit/{post}',[
    'uses'=>'PostsController@edit',
    'as'=>'post.edit'
]);
Route::post('/post/update/{post}',[
    'uses'=>'PostsController@update',
    'as'=>'post.update'
]);

Route::any('/search', 'HomeController@search');

Route::get('/detail',function(){
    return view('detail');
});