<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function getWard(Request $request)
    {
        $district=District::where('name',$request->name)->first();
        return view('ajax.ward',compact('district'));
    }
}
