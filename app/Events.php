<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  public function cards()
  {
    return $this->belongsToMany(
      Card::class,
      'events',
      'events',
      'name'
    );
  }
}
