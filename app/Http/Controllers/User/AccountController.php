<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class AccountController extends Controller
{
    public function index() {
        return view('account');
    }

    public function cancel($id) {
        $order = Order::findOrFail($id);
        $order->status = 3;
        $order->save();
        return redirect()->route('account');
    }
}
