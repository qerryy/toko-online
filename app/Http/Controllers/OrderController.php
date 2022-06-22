<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

class OrderController extends Controller
{
   
    public function index()
    {
    	$orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
    	$orders = Order::findOrFail($id);
        return view('orders.show', ['orders'=>$orders]);
    }

    public function create()
    {
        $orders = User::all();
        return view('orders.create', ['orders'=>$orders]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_number'=>'required',
            'user_id'=>'required',
            'total_price'=>'required',
            'status'=>'required',
        ]);

        Order::create([
            'invoice_number'=>$request->invoice_number,
            'user_id'=>$request->user_id,
            'total_price'=>$request->total_price,
            'status'=>$request->status,
        ]);

        return redirect()->route('orders.create')->with('status', 'Order was Successfully Created');
    }

    public function edit($id)
    {
        $orders = Order::findOrFail($id);
        $users = User::all();
        return view('orders.edit', ['orders'=>$orders, 'users'=>$users]);
    }

    public function update(Request $request, $id)
    {
        $update_order = Order::findOrFail($id);
        $request->validate([
            'invoice_number'    =>'required',
            'user_id'           =>'required',
            'total_price'       =>'required',
            'status'            =>'required',
        ]);

        $update_order->update([
            'invoice_number'    =>$request->invoice_number,
            'user_id'           =>$request->user_id,
            'total_price'       =>$request->total_price,
            'status'            =>$request->status,
        ]);

        $update_order->save();
        return redirect()->route('orders.edit',['orders'=>$update_order])->with('status', 'Order was Updated Successfully');
    }

    public function destroy($id)
    {
        $orders = Order::findOrFail($id);
        $orders->delete();
        return redirect()->back()->with('status', 'Order was Successfully deleted');
    }

    public function search(Request $request)
    {
        $cari = $request->get('search');
        $cari2 = $request->get('search2');
        $orders = Order::where('invoice_number', 'LIKE', '%'.$cari.'%')->where('status', 'LIKE', '%'.$cari2.'%')->paginate(5);
        $orders->appends($request->only('search'));

        return view('orders.index', compact('orders'));
    }

}