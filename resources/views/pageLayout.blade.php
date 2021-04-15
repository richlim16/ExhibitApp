<!DOCTYPE html>
    <head>
        <title>Main Page</title>
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topbar">
            <div id="userArea">
                <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 36 36">
                    <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt" d="M18,20.25A10.125,10.125,0,1,0,7.875,10.125,10.128,10.128,0,0,0,18,20.25Zm9,2.25H23.126a12.24,12.24,0,0,1-10.252,0H9a9,9,0,0,0-9,9v1.125A3.376,3.376,0,0,0,3.375,36h29.25A3.376,3.376,0,0,0,36,32.625V31.5A9,9,0,0,0,27,22.5Z" fill="#fff"/>
                </svg>

                @guest
                    @if (Route::has('login'))
                        <h5 id="userName">Guest Account</h5>   
                    @endif

                    @else
                        <h5 id="userName">{{ Auth::user()->name }}</h4>
                @endguest
            </div>

            <h1 id="title"><a href=''>XHIBIT</a></h1>

            <div></div>

            @guest
                @if (Route::has('login'))
                <button id="myBtn" class="login">Log in</button>
                @endif

                @else
                <a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <p id="logoutText">
                        {{ __('Logout') }}
                    </p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                    </form>
                </a>

                
            @endguest
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                @guest
                    @if (Route::has('login'))
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>
                            <br>
                            <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                

                            <label for="password" class="">{{ __('Password') }}</label>
                            <br>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <br>
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

                            <br>
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
                @endguest
            </div>
        </div>

        <div id="container">
    
            <div id="sidenav">
                <h2 id="label">TABLES</h2>
                
                @yield('sidebar')
                
            </div>

            <div id="mainSide">
                @yield('content')
            </div>
    </body>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
</html>