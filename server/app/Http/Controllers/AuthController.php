<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use App\Models\User;

class AuthController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $token = null;
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return $this->response('Đăng nhập thất bại', 500);
            }
        } catch (JWTAuthException $e) {
            return $this->response('Đăng nhập thất bại', 500);
        }
        $user = JWTAuth::toUser($token);
        
        if(!$user->hasPermissionTo(config('permission.LOGIN_ADMIN'))){
            return $this->response('Đăng nhập thất bại', 500);
        }

        $permissions=JWTAuth::toUser($token)->getAllPermissions();

        $data = ['user' => $user, 'token' => $token ,'permissions' => $permissions];
        return $this->response($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserLogin()
    {
        return $this->response($this->getUser());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
