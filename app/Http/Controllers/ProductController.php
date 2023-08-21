<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        
        return Product::create($request->all());
    }

    public function show($id)
    {
        return Product::find($id);
    }
}
