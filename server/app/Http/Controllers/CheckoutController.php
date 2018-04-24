<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
use Cart;

class CheckoutController extends Controller
{
    public function index()
    {
       $provinces=Province::all();
       return view('checkout',compact('provinces'));
    }

    public function store(Request $request)
    {
        if(count(Cart::content())==0){
            return redirect('/');
        }
        $order = new Order;
        $order->name = $request->fullname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address.' '.$request->ward.' '.$request->district.' '.$request->province;
        $order->note = "note";
        $order->total = Cart::subtotal();
        $order->type_pay = $request->payment_method;
        if(Auth::check()){
            $order->user_id=Auth::user()->id;
        }
        $order->save();
        foreach (Cart::content() as $key => $cart) {
            $orderDetail=new OrderDetail;
            $orderDetail->order_id=$order->id;
            $orderDetail->total=$cart->qty;
            $orderDetail->product_id=$cart->id;
            $orderDetail->price=$cart->price;
            $orderDetail->save();
        }
        Cart::destroy();
        return redirect('checkout/'.$order->id);
    }

    public function success($id)
    {
        try{
            $order=Order::find($id);
            return view('success_checkout',compact('order'));
        }
        catch(\Exception $e){
            return redirect('/');
        }
    }
}
