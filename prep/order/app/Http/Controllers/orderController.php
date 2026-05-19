<?php

namespace App\Http\Controllers;
use App\Models\order;

use Illuminate\Http\Request;


class orderController extends Controller
{
    public function index()
    {
        $orders = order::all();
        return view('home',compact('orders'));
    }

    public function create()
    {
        return view('reg');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'order_number'=>'required',
            'customer_name'=>'required',
            'customer_email'=>'required|email',
            'total_amount'=>'required|numeric',
            'status'=>'required',
            'order_date'=>'required|date',
            'shipping_address'=>'required'
        ],[
            'order_number.required'=>'order number is requried',
            'customer_name.required'=>'customer name is requried',
            'customer_email.required'=>'customer email is requried',
            'total_amount.required'=>'total amount is requried',
            'status.required'=>'status is requried',
            'order_date.required'=>'order date is requried',
            'shipping_address.required'=>'shipping address is requried'
        ]);

        order::create($data);
        return redirect()->route('ord.index');


    }
    
    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
      

        
    }  
  
    public function update(Request $request, string $id)
    {
          $data = $request->validate([
            'order_number'=>'required', 
            'customer_name'=>'required',
            'customer_email'=>'required|email',
            'total_amount'=>'required|numeric', 
            'status'=>'required',
            'order_date'=>'required|date',
            'shipping_address'=>'required'
        ],[
            'order_number.required'=>'order number is requried',
            'customer_name.required'=>'customer name is requried',
            'customer_email.required'=>'customer email is requried',
            'total_amount.required'=>'total amount is requried',
            'status.required'=>'status is requried',
            'order_date.required'=>'order date is requried',
            'shipping_address.required'=>'shipping address is requried'
        ]);

        $rec = order::find($id);
        $rec->update($data);
        return redirect()->route('ord.index');
    }

    public function destroy(string $id)
    {
        
    }
}
