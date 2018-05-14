<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class ItemController extends Controller
{
  public function showDetail($id)
  {
      $posts = Post::find($id);
      return view('draft',compact('posts'));
  }
  public function createItem()
  {
      return view('newdraft');
  }
}
