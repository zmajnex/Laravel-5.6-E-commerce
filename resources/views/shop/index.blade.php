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
     {{-- <div class="col-4">
            <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">Product title</h2>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p>price:20$</p>
              <button class="btn btn-primary">Add to cart</button>
            </div>
      </div>
      <div class="col-4">
            <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">Product title</h2>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p>price:20$</p>
              <button class="btn btn-primary">Add to cart</button>
            </div>
      </div>
      <div class="col-4">
            <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">Product title</h2>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p>price:20$</p>
              <button class="btn btn-primary">Add to cart</button>
            </div>
      </div>
      <div class="col-4 col ">
            <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">Product title</h2>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p>price:20$</p>
              <button class="btn btn-primary">Add to cart</button>
            </div>
      </div>--}}
{{--Products from db--}}
   @foreach ($products as $product )

       <div class="col-4 col ">
            <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">{{$product->title}}</h2>
              <p class="card-text">{{$product->description}}</p>
              <p>price:<span>{{$product->price}} </span>$</p>
              <button class="btn btn-primary">Add to cart</button>
            </div>
      </div>
   @endforeach

    </div>
  </div>
  
@endsection