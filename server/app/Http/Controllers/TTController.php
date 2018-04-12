<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class TTController extends Controller
{
    public function DsTinTuc()
    {
        $arrtintuc=News::all();
        return view("tintuc",compact("arrtintuc"));
    }

    public function BaiViet($id)
    {
        return view("chitietbaiviet");
    }
}
