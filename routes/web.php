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
Route::get('/', 'PostsController@index');

//記事作成
Route::get('draft','PostsController@create');
Route::post('draft','PostsController@store');

//記事修正
Route::get('edit/{id}', 'PostsController@edit');
Route::post('edit/{id}', 'PostsController@update');

//記事削除
Route::delete('destroy/{id}','PostsController@destroy');

//コメント機能
Route::post('edit/{id}/comment','CommentsController@store');
