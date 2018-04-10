<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SpController extends Controller
{
    public function getAllSp()
    {
        $sp=Category::all();
        return responese()->json($sp);
    }
}
