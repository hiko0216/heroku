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
Route::get('/redirect','SocialFacebookController@redirect');
Route::get('/auth/facebook/callback','SocialFacebookController@callback');

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

//chatボタンを押したらfriendテーブルに追加する→個別のチャットルームに移動Route
Route::post('/friend/add/{friend}',[
    'uses'=>'FriendController@store',
    'as'=>'friend.add'
]);


//chat.indexに飛ぶroute（友達一覧を持ってくる必要あり）
Route::get('/friends',[
    'uses'=>'FriendController@index',
    'as'=>'friend.index'
]);
//個別のチャットルームに飛ぶ（idを渡す）
// Route::get('/chat',[
//     'uses'=>'ChatController@chat',
//     'as'=>'chat.chat'
// ]);

Route::get('/chat/{id}',[
    'uses'=>'ChatController@see',
    'as'=>'chat.see'
]);

//getchat
Route::post('/chat/getChat/{id}','ChatController@getChat');
Route::post('/chat/sendChat','ChatController@sendChat');

Route::get('show/friend/posts/{id}',[
    'uses'=>'FriendController@show',
    'as'=>'show.friend.post'
]);
