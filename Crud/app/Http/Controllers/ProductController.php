<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();

        return view('products.index' , ['products' => $products]);
        //not connected with database so we need model
    }

    public function create(){
        return view('products.create');
    }

    public function store(request $request){
        $data= $request->validate([


            'name' =>  'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description'=> 'required'
        ]);

       $newproduct = product::create($data);
        return redirect(route('product.index'));
    }

    //4 creating funcrion for edit , product camae from route 
    public function edit(product $product){
        

        return  view('products.edit', ['product' => $product]);
    }
    public function update(product $product, Request $request){
        
        $data= $request->validate([


            'name' =>  'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description'=> 'required'
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success' , 'product updated');
       
    }

    public function delete(product $product ){
        $product->delete();
        return redirect(route('product.index'))->with('success' , 'product deleted');

    }


}
