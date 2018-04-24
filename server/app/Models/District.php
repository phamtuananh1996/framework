<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table='district';
    //protected $primaryKey = 'districtid';

    public function wards()
    {
        return $this->hasMany('App\Models\Ward','districtid','districtid');
    }
}
