<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function addCart($id,Request $request)
    {
        if($request->has('qty')){
            $qty=$request->qty;
        }else{
            $qty=1;
        }
        $product=Product::find($id);
        Cart::add($product->id,$product->name,$qty,$product->price,['image' => $product->image]);
        return redirect('cart');
    }

    public function getCart()
    {
        return view('cart');
    }

    public function deleteCart($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart');
    }

    public function addAjaxCart($id)
    {
        $product=Product::find($id);
        Cart::add($product->id,$product->name,1,$product->price,['image' => $product->image]);
        return view('modal.cart');
    }

    public function deleteAjaxCart($rowId)
    {
        Cart::remove($rowId);
        return view('modal.cart');
    }
}
