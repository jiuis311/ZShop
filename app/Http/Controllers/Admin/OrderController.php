<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('updated_at', 'desc')->paginate(config('app.user_pagination'));
        $data = [
            'orders' => $orders
        ];
        return view('admin.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $data = [
            'order' => $order
        ];
        return view('admin.order.invoice', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Delete success'
        ]);
    }

    public function confirm($id) {
        $order = Order::findOrFail($id);
        $order->status = 1;
        $order->save();
        return redirect()->route('admin.order.show', $id);
    }

    public function deliver($id) {
        $order = Order::findOrFail($id);
        $order->status = 2;
        $order->save();
        return redirect()->route('admin.order.show', $id);
    }

    public function cancel($id) {
        $order = Order::findOrFail($id);
        $order->status = 3;
        $order->save();
        return redirect()->route('admin.order.show', $id);
    }
}
