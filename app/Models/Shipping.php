<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Shipping extends Model
{
    protected $fillable=['type','price','status','order_id'];

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
