<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
     public function index(){
        return view('product.index');
    }

    /*public function show($id){
        $data = $id;
        return view('products.show', compact('data'));
    }

    public function store(Request $request) 
    { 
        $data = $request->validate(['nama' => 'required|max:100', 'harga' => 'required|integer']);
        return redirect()->route('products.index')->with('status', 'Tersimpan'); 
    } */
    
}

