<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupCategory extends Model
{
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->hasMany('App\Models\Category','parent_id','id');
    }

    public function products()
    {
        return $this->hasManyThrough('App\Models\Product', 'App\Models\Category','parent_id');
    }
}
