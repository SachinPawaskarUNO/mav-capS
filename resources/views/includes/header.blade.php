    <nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 25px;padding-top: 5px">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" id="capsphere_logo" href="{{ url('/') }}">
                <img src="{{asset('/images/logo.png')}}" alt="CapSphere">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="@if (Request::is('investing'))active @endif" id="investing"><a href="{{ url('investing') }}">Investing</a></li>
                <li class="@if (Request::is('businessloans'))active @endif" id="businessloans"><a href="{{ url('businessloans') }}">Business Loans</a></li>
                <li class="@if (Request::is('howitworks')) active @endif" id="howitworks"><a href="{{ url('howitworks') }}">How It Works</a></li>
                <li class="@if (Request::is('aboutus'))active @endif" id="aboutus"><a href="{{ url('aboutus') }}">About Us</a></li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="@if (Request::is('login'))active @endif" id="login"><a href="{{ route('login') }}">Login</a></li>
                    <li class="@if (Request::is('register'))active @endif" id="register"><a href="{{ url('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="auth_first_name">
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" id="home">
                            <li>
                                <a href="{{url('/home')}}">
                                    Home
                                </a>
                            </li>
                            <li id="logout">
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
                @endif
            </ul>
        </div>
    </div>
</nav>
