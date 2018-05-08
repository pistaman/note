<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
  public function showDetail(){
      return view('draft');
  }
  public function createItem()
  {
      return view('newdraft');
  }
}
