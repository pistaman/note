<?php
use App\Models\Post;
use App\Models\Comment;
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


Auth::routes();

//一覧ページ
Route::get('/', 'HomeController@index')->name('home');

//記事作成
Route::get('draft','ItemController@create')->name('draft');
Route::post('draft','ItemController@store');

//記事修正
// Route::get();
// Route::post();

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
