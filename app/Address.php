<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function ordersShipping()
    {
        return $this->belongsTo('App\Order', 'address_id_shipping');
    }

    public function ordersReceipt()
    {
        return $this->belongsTo('App\Order', 'address_id_receipt');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
