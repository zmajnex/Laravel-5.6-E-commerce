@extends('layouts.masterapp')
@section('title')
Products
@endsection
@section('main-content')
<div class="container mt-2">
    <h1 class="red">Products</h1>
        <p>This is a products page</p>
</div>
  {{--Thumbnails--}}
  <div class="container">
    <div class="row ">
    
{{--Products from db--}}
   @foreach ($products as $product )
       
       <div class="col-4 col ">
            <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">{{$product->title}}</h2>
              <p class="card-text">{{$product->description}}</p>
              <p><b>price: <span class="text-danger">{{$product->price}}</span> $</b></p>
              <a href="{{route('products.addToCart',['id'=>$product->id])}}" class="btn btn-primary text-white">Add to cart</a>
            </div>
      </div>
   @endforeach

    </div>
  </div>
  
@endsection