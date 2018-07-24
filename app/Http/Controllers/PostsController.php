<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use Validator;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = \Auth::id();
        $posts = Post::where('user_id','=',$user_id)->latest('updated_at')->get();
        return view('home',compact('posts'));
    }
    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/')->with('message','削除しました。');
    }

    public function create()
    {
        return view('draft');
    }

    public function store (Request $request)
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

        return redirect()->action("PostsController@index")->with('message','保存が完了しました。');
    }

    public function edit (Request $request,$id)
    {
        $post = Post::find($id);
        return view('edit',compact('post'));
    }

    public function update (Request $request,$id)
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
        return redirect()->back()->with('message', '保存しました。');
    }
}
