<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use DB;

class ItemController extends Controller
{
  public function create()
  {
      $user_id = \Auth::id();
      return view('draft',compact('user_id'));
  }
  public function store(Request $request)
  {
      $user_id = \Auth::id();
      $posts = new Post;
      $posts->title = $request->title;
      $posts->content = $request->content;
      $posts->user_id = $user_id;
      $posts->save();
      if (condition) {
        // return back();
      }
      return redirect()->action("HomeController@index");
  }
}
