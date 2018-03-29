

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link"  style="color:red" href="{{url('/')}}">Home</a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/products')}}">Products <span class="sr-only">(current)</span></a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    {{--Shoping cart--}}
                    <li class="nav-item active  ">
                        <a class="nav-link" href="{{route('product.shoppingCart')}}">
                            <i class="fas fa-shopping-cart fa-lg">
                                {{--Shoping cart display--}}
                                 <span class="badge bg-danger" >
                                     {{Session::has('cart')? Session::get('cart')->totalQty :'0' }}
                                 </span>
                            </i>
                            
                            
                        </a>
                    </li>
                    {{-- End Of Shoping cart--}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                     {{--Shoping cart--}}
                     <li class="nav-item active  ">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart fa-lg"></i>
                                <span class="cart-counter" >0</span>
                            </a>
                        </li>
                        {{-- End Of Shoping cart--}}
                @endguest
            </ul>
        </div>
    </div>
</nav>