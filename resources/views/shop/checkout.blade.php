@extends('layouts.masterapp')
@section('title')
Checkout
@endsection
@section('main-content')

<div class="container mt-2">
        <h1 class="red">Checkout</h1>
     <p>Your total price is: <span>{{$total}}</span></p>

</div>
<div class="container mt-2">
      {!!Form::open(['route' => 'checkout','method' => 'post'])!!}
      {!!Form::close()!!}
</div>
@endsection