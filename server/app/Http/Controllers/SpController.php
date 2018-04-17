<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\GroupCategory;

class SpController extends Controller
{
    public function getAllSp()
    {
        $groupCategorys=GroupCategory::with('products')->get();
        return view("home",compact('groupCategorys'));
    }

    public function GetSp($id)
    {
        $product=Product::find($id);
        $dsspht=Product::limit(4)->get();
        return view("chitietsp",compact('product'));
    }

    public function getProductApi($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}