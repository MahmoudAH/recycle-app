<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Order extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = ['return', 'glass', 'paper', 'steal','food','electronic','plastic_containers','kanz_containers','plastic_bages','city','numOfOrders'];
  

     /**
     * Get the customer that placed the order.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    } 
    public function materials()
    {
    return $this->belongsToMany('App\Material', 'material_id');

    }  
      
}
