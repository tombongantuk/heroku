<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">LARA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('homes') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">Contact</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('article.index') }}">Article</a>
            </li>    
            @endauth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('popular-movies') }}">Popular Movies</a>
          </li> 
            @guest
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a class="nav-link"href="{{ route('register') }}">Register</a>
                </li>
            @else 
                <li class="dropdown">
                    <a class="nav-link"href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>    
            @endguest
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="search-text mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
          </form>
        </div>
</nav>
               
            