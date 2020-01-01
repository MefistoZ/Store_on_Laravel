<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        return view('basket/basket');
    }

    public function basketPlace()
    {
        return view('basket/order');
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if ($orderId == null){
            $orderId = Order::create()->id;
            session(['orderId'=>$orderId]);
        }
        dump($orderId);

    }

}
