<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    private function demoOrder() {
        $o = new Order;
        $o->customer;
        $o->email = $c1->email;
        $o->comment = 'demoOrder';
        $o->total = mt_rand(1000,10000);
        $o->save();
    }
    private function index() {
        if( Order::get()->isEmpty()) {
            $this->demoOrder();
        }
        $orders = Order::all();
        return view('order')
    }
}
