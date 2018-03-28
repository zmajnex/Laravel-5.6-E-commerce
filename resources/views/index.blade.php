@extends('layouts.masterapp')
{{--@extends('layouts.navbar')--}}
{{--@extends('layouts.footer')--}}
@section('title')
Home page
@endsection
{{--@section('login-msg')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
@section('main-content')

<div class="container mt-2">
    <h1 class="red">Home</h1>
        <p>This is home page</p>
      
</div>

      {{--Thumbnails--}}
      <div class="container">
            <div class="row ">
              <div class="col-4">
                    <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <button class="btn btn-primary">KUPI</button>
                    </div>
              </div>
              <div class="col-4">
                    <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <button class="btn btn-primary">KUPI</button>
                    </div>
              </div>
              <div class="col-4">
                    <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <button class="btn btn-primary">KUPI</button>
                    </div>
              </div>
              <div class="col-4 col ">
                    <img class="card-img-top" src="{{asset('storage/mobile.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <button class="btn btn-primary">KUPI</button>
                    </div>
              </div>
            </div>
          </div>
@endsection
