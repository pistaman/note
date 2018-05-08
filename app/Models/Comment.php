<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function posts(){
    return $this->belongsTo('App\Models\Post');
  }
  public function users(){
    return $this->belongsTo('App\User');
  }
}
