<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function addressShipping()
    {
        return $this->hasOne('App\Address', 'address_id_shipping');
    }

    public function addressReceipt()
    {
        return $this->hasOne('App\Address', 'address_id_receipt');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function shipping()
    {
        return $this->hasOne('App\Shipping');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
