@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products</h2>
        <div class="row">

            @foreach ($allProducts as $product)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('book.jpg') }}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">{{$product -> name}}</h4>
                        <p class="card-text">Text</p>
                    </div>

                    <div class="card-body">
                        <a href="{{ route('cart.add', $product -> id)}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

            </div>
                
            @endforeach
            </div>
        </div>

@endsection
