@extends('layouts.masterapp')
@section('title')
Shopping cart
@endsection
@section('main-content')
@if(Session::has('cart'))
<div class="container mt-2">
        <h1 class="red">Your shopping Cart</h1>
        @foreach ($products as $product )
        <p>Product:{{$product['item']['title']}}</p> 
      
        <p> Price:{{$product['price']}}</p> 
        <hr>
        @endforeach
        <p> Total price:{{$totalPrice}}</p>
    </div>
@else
Korpa je prazna!
@endif


  
@endsection