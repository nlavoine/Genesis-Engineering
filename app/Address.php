<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function orders()
    {
        return $this->belongsTo('app\Order');
    }
}