<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    protected $fillable=['image', 'title', 'content', 'user_id', 'state'];
    protected $appends = ['full_image'];
    
    public function getFullImageAttribute()
    {
        return env('APP_URL').$this->image;
    } 

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
