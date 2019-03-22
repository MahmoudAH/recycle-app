<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mateial extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'price',
    ];
  public function orders()
{
     return $this->belongsToMany('App\Order');
}
}
