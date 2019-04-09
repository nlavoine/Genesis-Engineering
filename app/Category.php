<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        //return $this->belongsTo('App\Product');
        return $this->hasMany('App\Product');
    }

    /*public function parent() {
        return $this->belongsTo(static::class, 'parent_id');
    }

    //each category might have multiple children
    public function children() {
        return $this->hasMany(static::class, 'parent_id')->orderBy('name', 'asc');
    }*/
}
