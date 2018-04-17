<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupCategory;
use App\Models\Category;
use App\Models\Product;

class GroupCategoryController extends Controller
{
    public function getProduct($id)
    {
        $groupCategory=GroupCategory::find($id);
        $title=$groupCategory->name;
        $category_id=Category::where('parent_id',$id)->pluck('id')->all();
        $products=Product::whereIn('category_id',$category_id)->paginate(config('paginate.PAGE_PRODUCT'));
        return view('listproduct',compact('products','title'));
    }
}
