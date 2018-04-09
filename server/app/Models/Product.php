<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['category_id','name','price','image','image_more','info','state'];
}
