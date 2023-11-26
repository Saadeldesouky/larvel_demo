<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    //
    public function index() {
        return Product::all();
    }

    public function show($id) {
        return Product::find($id);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:24',
            'price' => 'required',
            'desc' => 'required'
        ]);

        return Product::create($request->all());
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required|max:24',
            'price' => 'required',
            'desc' => 'required'
        ]);
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id) {
        return Product::destroy($id);
    }

    public function search($title) {
        return Product::where('title', 'like', '%' . $title . '%')->get();
    }
}
