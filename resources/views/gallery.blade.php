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
        <link href="{{URL::asset('css/exhibitCardStyle.css')}}" rel="stylesheet">

        <link href="{{URL::asset('css/tabStyle.css')}}" rel="stylesheet">

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

            <div>
                

                @guest
                    @if (Route::has('login'))

                    @endif
                    @else
                    <a class="tableBtn" style="margin-top: 15px; margin-right: 15px"href="/home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </a>     
                @endguest
                
            </div>
            
            @guest
                @if (Route::has('login'))

                    <button id="myBtn" onclick="location.href = '/login';" class="login">Log in</button>
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

        @if (\Request::is('/')) 
        <div id="exhibit_container">
        @else 
        <div id="container">
            <div id="sidenav">
                <h2 id="label">Exhibits</h2>
                    <ul id="nav">    

                    @foreach ($exhibits as $item)
                        
                        <a href="exhibit-{{$item->id}}">
                            <li class="subTab">{{$item->title}}</li>
                        </a>
                    @endforeach
                    </ul>
            </div>
        
        @endif
        

            <div id="mainSide">
                @yield('content')
            </div>

        </div>

    </body>
</html>