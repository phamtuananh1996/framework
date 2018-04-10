<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;

class ApiController extends Controller
{
    public function response($data,$status=200)
    {
        return response()->json($data,$status);
    }

    public function getUser()
    {
        return $user = JWTAuth::parseToken()->authenticate();
    }

    public function doUpload($file){
        $name=time().$file->getClientOriginalName();
        $file->move('product',$name);
        return '/product/'.$name;
    }

    public function doMultiUpload($files){
        $data=[];
        foreach ($files as $file) {
            $name=time().$file->getClientOriginalName();
            $file->move('product',$name);
            $data[]='/product/'.$name;
        }
        return count($files);
    }
}
