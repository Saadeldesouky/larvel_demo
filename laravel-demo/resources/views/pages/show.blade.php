@extends('layouts.master')

@section('title', 'Details Page')

@section('main')
    <div class="alert alert-dark text-center py-3 my-5 container w-50 fs-4">
        Event Details
    </div>
    <section class="container w-50 mx-uto bg-light shadow rounded text-center my-5 p-5">
        <h2>Product Title: {{$product->title}}</h2>
        <hr>
        <p>Event Price: {{$product->price}} $ <br> {{$product->desc}}</p>
        <div class="bg-secondary rounded text-center py-3 my-3">
            Created at {{$product->created_at}}
        </div>
        <hr>
        <a href="/events">Return to Products Page</a>
    </section>
@endsection
