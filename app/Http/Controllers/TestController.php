<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\note;

class TestController extends Controller
{
    protected function test()
    {
      $md = new note();
      $data = $md->getData();
      return view('test',['data'=>$data]);
    }
}
