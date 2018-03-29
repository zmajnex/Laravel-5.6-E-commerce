@extends('layouts.masterapp')
@section('title')
Shopping cart
@endsection
@section('main-content')
@if(Session::has('cart'))
<div class="container mt-2">
        <h1 class="red">Your shopping Cart</h1>
        @foreach ($products as $product )
        <p>Product: {{$product['item']['title']}}</p> 
         <p>Quantity: {{$product['qty']}}
                <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Remove
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item  " href="{{route('product.reduce',['id'=>$product['item']['id']])}}">Remove one</a>
                          <a class="dropdown-item " href="{{route('product.remove',['id'=>$product['item']['id']])}}">Remove all</a>
                         
                        </div>
                      </div>     
        </p>
        <p> Price: {{$product['price']}}</p> 
        <hr>
        @endforeach
        <p> Total price:{{$totalPrice}}</p>
    </div>
@else
<div class="container  mt-4 alert alert-danger">
        Cart is empty!
</div>

@endif


  
@endsection