<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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
        $email =$request->email;
        $password =$request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect("/");
        }
        else{
            return redirect("login")->with(['err'=>"error"]);
        }
    }
    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect("/");
    }
    public function Register(Request $request)
    {
        $user=new User();
        $user->name=$request->firstname . $request->lastname;
        $user->password=bcrypt($request->password);
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
        return redirect("login")->with(['err'=>"error"]);
    }
}
