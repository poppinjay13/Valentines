<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
  protected $fillable = [
      'fid', 'flavour', 'flavourPrice',
  ];
}
