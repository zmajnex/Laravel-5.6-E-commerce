@extends('layouts.masterapp')
{{--@extends('layouts.navbar')--}}
{{--@extends('layouts.footer')--}}
@section('title')
Home page
@endsection
{{--@section('login-msg')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

@endsection
