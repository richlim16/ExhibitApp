<!DOCTYPE html>
    <head>
        <title>Main Page</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <link href="{{URL::asset('css/pageStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/topbarStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/sidenavStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/tableStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/popupStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/formStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/cardStyle.css')}}" rel="stylesheet">

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

            <h1 id="title"><a href='/'>XHIBIT</a></h1>

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

       

        <div id="container">
            <!-- side nav bar -->
            <div id="sidenav">
                <h2 id="label">TABLES</h2>
                    <ul id="nav">    
                        <a href="@if (\Request::is('art')) # @else /art @endif">
                            <li class="@if (\Request::is('art'))selected @endif subTab">art</li>
                        </a>

                        <a href="@if (\Request::is('exhibit')) # @else /exhibit @endif">
                            <li class="@if (\Request::is('exhibit'))selected @endif subTab">exhibit</li>
                        </a>

                        <a href="@if (\Request::is('poetry')) # @else /poetry @endif">
                            <li class="@if (\Request::is('poetry'))selected @endif subTab">poetry</li>
                        </a>

                        <a href="@if (\Request::is('transaction')) # @else /transaction @endif">
                            <li class="@if (\Request::is('transaction'))selected @endif subTab">transaction</li>
                        </a>

                        @if(Auth::user()->admin == true)
                            <a href="/usersTable">
                                <li class="subTab">user</li>
                            </a>
                        @endif
                    </ul>
            </div>

            <!-- area that will display tables-->
            <div id="mainSide">
                @yield('content')
            </div>
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