<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $pdc = Product::all();
        return view('home',compact('pdc'));
    }

   
    public function create()
    {
        return view('reg');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|max:50',
        ],[
            'name.required'=>'Product Name is Required',
            'name.min'=>'Product Name must be at least 3 characters long',
            'description.required'=>'Product Description is Required',
            'description.max'=>'Product Description must be at most 255 characters long',
            'price.required'=>'Product Price is Required',
            'price.numeric'=>'Product Price must be a number',
            'quantity.required'=>'Product Quantity is Required',
            'quantity.numeric'=>'Product Quantity must be a number',
            'category.required'=>'Product Category is Required',
            'category.max'=>'Product Category must be at most 50 characters long',
        ]);

        $result = Product::create($data);

        if($result)
        {
            return redirect()->route('pdc.home');
        }
        else
        {
            return 'error Product Not Added';
        }
        
    }

    public function show(string $id)
    {
        
    }

   
    public function edit(string $id)
    {
        $pdc = Product::findOrFail($id);
        return view('edit',compact('pdc'));
    }

    
    public function update(Request $request, string $id)
    {
         $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|max:50',
        ],[
            'name.required'=>'Product Name is Required',
            'name.min'=>'Product Name must be at least 3 characters long',
            'description.required'=>'Product Description is Required',
            'description.max'=>'Product Description must be at most 255 characters long',
            'price.required'=>'Product Price is Required',
            'price.numeric'=>'Product Price must be a number',
            'quantity.required'=>'Product Quantity is Required',
            'quantity.numeric'=>'Product Quantity must be a number',
            'category.required'=>'Product Category is Required',
            'category.max'=>'Product Category must be at most 50 characters long',
        ]);

       $result = Product::find($id)->update($data);

        if($result)
        {
            return redirect()->route('pdc.home');
        }
        else
        {
            return 'error Product Not Updated';
        }
    }

    public function destroy(string $id)
    {
        $result = Product::find($id)->delete();
        if($result)
        {
            return redirect()->route('pdc.home');
        }
        else
        {
            return 'error Product Not Deleted';
        }
    }
}
