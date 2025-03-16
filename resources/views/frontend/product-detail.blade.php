@extends('frontend.layouts.master')

@section('title', $product->name)

@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="https://via.placeholder.com/400" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <h4>${{ $product->price }}</h4>
            <button class="btn btn-success">Add to Cart</button>
        </div>
    </div>
@endsection
