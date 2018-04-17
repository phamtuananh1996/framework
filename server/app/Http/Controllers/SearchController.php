<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $title = "Kết quả tìm kiếm cho '".$request->q."':";
        $products=Product::where('name','like',"%".$request->q."%")->paginate(config('paginate.PAGE_PRODUCT'));
        return view('listproduct',compact('products','title'));
    }
}
