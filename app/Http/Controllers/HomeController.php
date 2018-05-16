<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        // $test1 = Post::where('user_id','=',$user_id)->first();
        // $test2 = Post::with('users')->where('user_id','=',$user_id)->first();
        // echo"<pre>";
        // print_r($test1->toArray());
        // print_r($test2->toArray());
        // echo"<pre>";
        //die;
        $posts = Post::where('user_id','=',$user_id)->latest('updated_at')->get();
        return view('home',compact('posts'));
    }
    public function destroy($id) {
         $post = Post::findOrFail($id);
         $post->delete();
         return redirect('/')->with('message','削除しました。');
    }
}
