<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){

        $data['orders'] = Order::all();
        return view('order', $data);

    }

}
