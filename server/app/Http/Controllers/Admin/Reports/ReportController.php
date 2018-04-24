<?php

namespace App\Http\Controllers\Admin\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\News;

class ReportController extends ApiController
{
    public function __construct() {
        $this->middleware('jwt.auth');
    }

    public function report()
    {
        $data=array();
        $data['users_count']=count(User::all());
        $data['orders_count']=count(Order::all());
        $data['products_count']=count(Product::all());
        $data['newss_count']=count(News::all());
        return $this->response($data);
    }
}
