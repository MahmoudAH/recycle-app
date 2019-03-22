<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Contact extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','telephone','email','message'
    ];
    
}
