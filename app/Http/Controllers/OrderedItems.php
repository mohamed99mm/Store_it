<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderedItems extends Controller
{
    //
    public function index(){
        $orders=Order::all();
        return view('record',compact('orders'));
    }

    public function create(){
        $order=new Order;
        $order->itemname=request('name');
        $order->itemquantity=request('quantity');
        $order->itemunit=request('itemunit');
        $order->itemprice=request('itemprice');
        $order->companyname=request('companyname');
        $order->location=request('location');
        $order->duration=request('duration');
        $order->totalprice=$order->itemprice*$order->itemquantity;
        $order->save();
        return redirect('/order/record');
    }
    public function edit($id)
    {
        $order=Order::findOrFail($id);
        return view('edits', compact('order'));
    }
    public function  update ($id){
        $order=Order::findOrFail($id);
        $order->itemname=request('name');
        $order->itemquantity=request('quantity');
        $order->itemunit=request('itemunit');
        $order->itemprice=request('itemprice');
        $order->companyname=request('companyname');
        $order->location=request('location');
        $order->duration=request('duration');
        $order->totalprice=$order->itemprice*$order->itemquantity;
        $order->save();
        return redirect('/order/record');
    }
    public function destroy($id){
        $order=Order::findOrFail($id);
        $order->delete();
        return redirect('/order/record');
    }
}
