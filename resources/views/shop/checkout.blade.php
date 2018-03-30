@extends('layouts.masterapp')
@section('title')
Checkout
@endsection
@section('main-content')

<div class="container mt-2">
        <h1 class="red">Checkout</h1>
     <p>Your total price is: <span >{{$total}}</span></p>
     
</div>
<div class="container mt-2">
      {!!Form::open(['route' => 'checkout','method' => 'post', 'id'=>'checkout-form'])!!}
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="name" placeholder="Your name" >
          </div>

         <div class="input-group mb-3">
            <input type="text" class="form-control" id="address" placeholder="Your address">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="card-name" placeholder="Card name" required>
        </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" id="card-number" placeholder="Card number" required>
     </div>
     <div class="input-group mb-3">
            <input type="text" class="form-control" id="card-expiry-month" placeholder="Card exp month" required>
        </div>
        <div class="input-group mb-3">
                <input type="text" class="form-control" id="card-expiry-year" placeholder="Card exp year " required>
        </div>
        <div class="input-group mb-3">
                <input type="text" class="form-control" id="card-cvc" placeholder="Card cvc" required>
        </div>
        <label for="card-element">
                Credit or debit card
              </label>
              <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
              </div>
          
              <!-- Used to display Element errors. -->
              <div id="card-errors" role="alert"></div>



        <button class="btn btn-success" type="submit">Submit Payment</button>
      {!!Form::close()!!}
      

      

@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset('js/checkout.js')}}"></script>
@endsection