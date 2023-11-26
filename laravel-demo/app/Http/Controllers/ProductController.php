<?php

namespace App\Http\Controllers;

use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
//        $products = Product::all();
        $products = Product::orderBy('id', 'desc')->simplePaginate(12);
        return view('pages.events', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:24',
            'price' => 'required',
            'desc' => 'required'
        ]);
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->save();
        return redirect('/events');
    }

    public function show($id) {
        $product = Product::find($id);
        return view('pages.show', compact('product'));
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('pages.edit', compact('product'));
    }
    public function update($id, Request $request) {
        $request->validate([
           'title' => 'required|max:24',
            'price' => 'required',
            'desc' => 'required'
        ]);
        $product = Product::find($id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->save();
        return redirect('/events');
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/events');
    }
}
