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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//詳細画面
Route::get('item/{post_id}','ItemController@showDetail')->name('draft');

//新規投稿用
// Route::post('draft/new', function(Request $request) {
//   return view('newdraft');
// });

//this is a test

// Route::get('/aiu',function(){
//   $users = App\User::find(1);
//   $postdesu = $users->posts;
//   foreach($postdesu as $post)
//   {
//     echo $post->content;
//   }
//
//   return;
// });
