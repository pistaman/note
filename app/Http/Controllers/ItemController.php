<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use Validator;

class ItemController extends Controller
{
  public function create()
  {
      return view('draft');
  }

  public function store(Request $request)
  {
      $message = [
          'title.required' => 'タイトルは必須です。','content.required' => 'コンテンツは必須です。'
      ];
      $validator = Validator::make($request->all(),[
          'title' => 'required',
          'content' => 'required'
      ], $message);
      if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
      }
      $user_id = \Auth::id();
      $posts = new Post;
      $posts->title = $request->title;
      $posts->content = $request->content;
      $posts->user_id = $user_id;
      $posts->save();

      return redirect()->action("HomeController@index")->with('message','保存が完了しました。');
  }

  public function edit(Request $request,$id)
  {
      $post = Post::find($id);
      return view('edit',compact('post'));
  }

  public function update(Request $request,$id)
  {
      $message = [
          'title.required' => 'タイトルは必須です。','content.required' => 'コンテンツは必須です。'
      ];
      $validator = Validator::make($request->all(),[
          'title' => 'required',
          'content' => 'required'
      ], $message);
      if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
      }
      $user_id = \Auth::id();
      $post = Post::findOrFail($request->id);
      $post->title = $request->title;
      $post->content = $request->content;
      $post->user_id = $user_id;
      $post->save();
      return redirect()->back();
  }
}
