<header class="header">
  <div class="container clearfix">
    <div class="row float-right">
      <ul class="navbar-nav navbar-login">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
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
        @endguest
    </ul>
    </div>
  </div>
    <div class="container">
     
      <div class="row justify-content-center text-center">
        <div class="col-md">
          <img src="../assets/img/festifavs_logo.png" width="300px">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-center">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-dark bg-dark navbar-collapse justify-content-center text-center" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-dark bg-dark">
              <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
              <a href="{{route('festivals')}}" class="nav-item nav-link">Festivals</a>
              <a href="{{route('favorites')}}"class="nav-item nav-link">Favorites</a>
              <a href="{{route('about')}}" class="nav-item nav-link">About</a>
              <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
             </div>
      
             
          </div>
        </nav>
    </div>
</header>