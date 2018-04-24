<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\GroupCategory;

class SpController extends Controller
{
    public function getAllSp(Request $request)
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

    public function GetSpOfCategory($id)
    {
        $category=Category::find($id);
        $title=$category->name;
        $products=Product::where('category_id',$category->id)->paginate(config('paginate.PAGE_PRODUCT'));
        return view('listproduct',compact('products','title'));
    }

    public function getProductApi($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function DichVu()
    {
        return view("dichvu");
    }
    public function GioiThieu()
    {
        return view("gioithieu");
    }
}