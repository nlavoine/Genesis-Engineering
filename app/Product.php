<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        //return $this->hasOne('App\Category');
        return $this->belongsTo('App\Category');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function images()
    {
        //return $this->belongsTo('App\Image')->orderBy('order', 'asc');
        return $this->hasMany('App\Image');
    }
}
