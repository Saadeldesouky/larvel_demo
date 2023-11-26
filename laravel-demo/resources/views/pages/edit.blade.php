@extends('layouts.master')

@section('title', 'Edit Product Page')

@section('main')
    <div class="alert alert-success text-center py-3 my-5 container w-50 fs-4">
         Edit Product
    </div>
    <div class="container my-5 w-50 mx-auto">
        <form action="{{'/events/' . $product->id . '/update'}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-3"><label for="title">Product Title</label><input type="text" class="form-control" id="title" name="title" value="{{$product->title}}"></div>
            <div class="form-group my-3"><label for="price">Product Price</label><input type="text" class="form-control" id="price" name="price" value="{{$product->price}}"></div>
            <div class="form-group my-3"><label for="desc">Product Description</label><textarea type="text" class="form-control" id="desc" name="desc" {{$product->desc}}></textarea></div>
            <input type="submit" value="Edit Product" class="btn btn-success my2">
        </form>
    </div>
@endsection



