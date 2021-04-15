<!DOCTYPE html>
    <head>
        <title>Main Page</title>
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topbar">
        <h1 id="title"><a href=''>XHIBIT</a></h1>
        </div>

        <div id="container">
    
            <div id="sidenav">
                <h2 id="label">TABLES</h2>
                
                @yield('sidebar')
                
                @guest
                    @if (Route::has('login'))
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                

                            <label for="password" class="">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                    
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                    </form>
                    @endif
                            
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>                
                @endguest
            </div>

            <div id="mainSide">
                @yield('content')
            </div>
    </body>
</html>