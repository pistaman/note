<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class note extends Model
{
    protected $table = 'test';
    protected $guarded = array('id');

    public function getData()
    {
      $data = DB::table($this->table)->get();
      return $data;
    }
}
