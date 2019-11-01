<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'email','flavour','size','icing','addon','inscription','date','status'
  ];
}
