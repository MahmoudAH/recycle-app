<?php

namespace App;
//use App\Notifications\MailResetPasswordToken;
use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes , HasRoles;
     //use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','city','phone','verifyToken','status','avatar',
    ];
     
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
       
        public function order()
    {
          return $this->hasMany('App\Order');

    }
        public function contact()
    {
          return $this->hasMany('App\Contact');

    }
     public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

}
