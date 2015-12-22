<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    //

    public function schools()
    {
      return $this->belongsToMany('App\School');
    }
}
