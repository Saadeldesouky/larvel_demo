@extends('layouts.master')

@section('title', 'Products Page')

@section('main')
    <div class="alert alert-info text-center py-3 my-5 container w-50 fs-4">
        All Products
    </div>
    <div class="container my-5">
        @if(count($products) > 0)
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card text-bg-light mb-3" style="max-width: 25rem">
                            <div class="card-header">{{$product->title}}</div>
                            <div class="card-body">
                                <h5 class="card-title">Product Price {{$product->price}}</h5>
                                <hr>
                                <p class="card-text">{{$product->desc}}</p>
                                <hr>
                                <div class="bg-secondary rounded text-center py-3 my-3">
                                    Created at {{$product->created_at}}
                                </div>
                                <hr>
                                <a href="{{'/events/' . $product->id}}" class="btn btn-md btn-primary my-2 mx-1">Show</a>
                                <a href="{{'/events/' . $product->id . '/edit'}}" class="btn btn-md btn-success my-2 mx-1">Edit</a>
{{--                                <a href="{{'/events/' . $product->id . '/delete'}}" class="btn btn-md btn-danger my-2 mx-1">Delete</a>--}}
                                <form action="{{route('destroy', ['id' => $product->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="row my-4 d-flex justify-content-center">
            {{$products->links()}}
        </div>
    </div>
@endsection
