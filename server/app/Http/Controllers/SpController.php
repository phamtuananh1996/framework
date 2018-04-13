<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\GroupCategory;

class SpController extends Controller
{
    public function getAllSp()
    {
        $sp=Product::all();
        
        $menu=GroupCategory::all();
        $menucon=Category::all();
        return view("home",compact('sp','menu','menucon'));
    }

    public function GetSp($id)
    {
        $spct=Product::find($id);
        $dsspht=Product::limit(4)->get();
        return view("chitietsp",compact('spct'),compact('dsspht'));
    }
}