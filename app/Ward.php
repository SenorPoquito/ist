<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{

    public function schools()
    {
      return $this->hasMany('App\School');
    }
}
