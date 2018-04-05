<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function response($data,$status=200)
    {
        return response()->json($data,$status);
    }
}
