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
            <div>
                
            </div>

            <h1 id="title"><a href='/'>XHIBIT</a></h1>

            <div></div>
            
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

                @guest
                    @if (Route::has('login'))
                        <h2 id="label">Exhibits</h2>
                        <ul id="nav">    

                        @foreach ($exhibits as $item)
                            
                            <a href="exhibit-{{$item->id}}">
                                <li class="subTab">{{$item->title}}</li>
                            </a>
                        @endforeach
                        </ul>
                    @endif
                    @else
                        <h2 id="label">TABLES</h2>
                        
                        <ul id="nav">  

                            <a href="@if (\Request::is('home')) # @else /home @endif">
                                <li class="@if (\Request::is('home'))selected @endif subTab">Gallery</li>
                            </a>  
                            <a href="@if (\Request::is('art')) # @else /art @endif">
                                <li class="@if (\Request::is('art'))selected @endif subTab">Art</li>
                            </a>

                            <a href="@if (\Request::is('exhibit')) # @else /exhibit @endif">
                                <li class="@if (\Request::is('exhibit'))selected @endif subTab">Exhibit</li>
                            </a>

                            <a href="@if (\Request::is('poetry')) # @else /poetry @endif">
                                <li class="@if (\Request::is('poetry'))selected @endif subTab">Poetry</li>
                            </a>

                            <a href="@if (\Request::is('music')) # @else /music @endif">
                                <li class="@if (\Request::is('music'))selected @endif subTab">Music</li>
                            </a>

                            @if(Auth::user()->admin == true)
                                <a href="{{route('user.index')}}">
                                    <li class="@if (\Request::is('poetry'))selected @endif subTab">User</li>
                                </a>
                            @endif
                        </ul>
                @endguest
                
            </div>
        
        @endif
            <div id="mainSide">
                @yield('content')
            </div>

        </div>

    </body>
</html>