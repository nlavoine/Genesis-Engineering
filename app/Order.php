<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function addressShipping()
    {
        return $this->hasOne('app\Address');
    }

    public function addressReceipt()
    {
        return $this->hasOne('app\Address');
    }

    public function user()
    {
        return $this->hasOne('app\User');
    }

    public function shipping()
    {
        return $this->hasOne('app\Shipping');
    }

    public function products()
    {
        return $this->belongsToMany('app\Product');
    }
}
