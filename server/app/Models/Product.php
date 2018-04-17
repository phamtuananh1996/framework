<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $appends = ['full_image'];

    protected $fillable=['user_id','category_id','name','price','image','image_more','info','state'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function getFullImageAttribute()
    {
        return env('APP_URL').$this->image;
    }

    public function getImageMoreAttribute($image_more)
    {
        if($image_more=='null')
        {
            return false;
        }
        return json_decode($image_more);
    }
}
