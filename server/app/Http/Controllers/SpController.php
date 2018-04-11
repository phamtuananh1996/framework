<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SpController extends Controller
{
    public function getAllSp()
    {
        $sp=Product::all();
        return view("index",compact('sp'));
    }
}
