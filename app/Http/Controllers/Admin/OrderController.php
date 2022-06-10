<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Order;
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
        $orders = Order::with('products','user')->get();
        
        return view('admin.pages.orders',compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order = Order::with('products','user')->find($order->id);
        return view('admin.pages.single_order',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'in:0,1,2'
        ]);

       $order->update([
            'status' => $request->status
        ]);

        return redirect()->route('orders.index')->with('msg',[
            'msg' => 'Order updated successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        
        return redirect()->route('orders.index')->with('msg',[
            'msg' => 'Order deleted successfully',
            'type' => 'error'
        ]);
    }
}
