<nav class="navbar navbar-expand-lg navbar-dark bg-dark">    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          @guest
        <li class="nav-item active">
          <a class="nav-link"  style="color:red" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/admin')}}">Admin <span class="sr-only">(current)</span></a>
        </li>
      
              
               
                <li class="nav-item">
                    <a class="nav-link red" href="{{url('/login')}}">Login</a>
                  </li>
                  @else
                  <li class="nav-item active">
                      <a class="nav-link"  style="color:red" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{url('/admin')}}">Admin <span class="sr-only">(current)</span></a>
                    </li>
                
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->email }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

      </ul>
      
    </div>
  </nav>