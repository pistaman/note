<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\User;
use Validator;

class CommentsController extends Controller
{
    public function store (Request $request)
    {
        $message = [
          'content.required' => 'コンテンツは必須です。'
        ];
        $validator = Validator::make($request->all(),[
          'content' => 'required'
        ], $message);
        if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
        }
        $user_id = \Auth::id();
        $comments = new Comment;
        $comments->content = $request->content;
        $comments->user_id = $user_id;
        $comments->save();

        return redirect()->action("PostsController@edit")->with('message','保存が完了しました。');
    }
}
