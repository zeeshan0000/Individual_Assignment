@extends('layouts.app')

@section('content')

    <h2>Your Cart</h2>

    <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <th scope="row">{{ $item -> name }}</th>
                    <td>{{ $item -> price }}</td>
                    <td>
                        <input type="number" value = {{ $item -> quantity }}>
                    </td>

                    <td>
                        <a href="{{ route('cart.destroy', $item -> id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
        
    

@endsection