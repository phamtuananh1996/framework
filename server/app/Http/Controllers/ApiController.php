<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function response($data,$status=200)
    {
        return response()->json($data,$status);
    }

    public function doUpload($file){
        $file->move('product',time().$file->getClientOriginalName());
        return 'product/'.$file->getClientOriginalName();
    }

    public function doMultiUpload($files){
        $data=[];
        foreach ($files as $file) {
            $file->move('product',time().$file->getClientOriginalName());
            $data[]='product/'.$file->getClientOriginalName();
        }
        return count($files);
    }
}
