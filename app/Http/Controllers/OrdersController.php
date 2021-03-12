<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function orderSave(Request $request)
    {

        $order = new Orders();

        $result = $order->createOrder($this);

        $admin = new Admin();
        $admin->sendMailOrders($result, $order);

        return view('index', [
            'result'    => $result,
        ]);
    }
}
