<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function ViewLogin()
    {
        return view("login");
    }

    public function ViewRegister()
    {
        return view("register");
    }
    public function Login(Request $request)
    {
        $username =$request->username;
        $password =bcrypt($request->password);
        $tk=User::where('name',$username)->where('password',$password)->first();
        if($tk)
        {
            $request->session()->put('user',$username);
            return redirect("");
        }
        else{
            return redirect("login")->with(['err'=>"error"]);
        }
    }
    public function Logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect("/");
    }
    public function Register(Request $request)
    {
        $user=new User();
        $user->name=$request->username;
        $user->password=bcrypt($request->password);
        $user->email=$request->email;
        $kq=$user->save();
        if($kq)
        {
            $request->session()->put('user',$user->name);
            return redirect("/");
        }
        else
        {
            return redirect("register")->with(['err'=>'error']);
        }
    }
}
