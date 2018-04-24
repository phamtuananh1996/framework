<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function getDistrict(Request $request)
    {
        $province=Province::where('name',$request->name)->first();
        return view('ajax.district',compact('province'));
    }
}
