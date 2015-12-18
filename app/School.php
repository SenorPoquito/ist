<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //

    public function ward()
    {
      return $this->belongsTo('App\Ward');
    }
}
