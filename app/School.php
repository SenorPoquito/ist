<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //

    public function area()
    {
      return $this->belongsTo('App\Area');
    }

    public function ages()
    {
      return $this->belongsToMany('App\Age');
    }
}
