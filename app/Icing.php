<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icing extends Model
{
  protected $fillable = [
      'icing_id', 'icing', 'icingPrice',
  ];
}
