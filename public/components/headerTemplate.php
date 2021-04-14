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
                <ul id="nav">
                    <a href=""><li class="selected" id="allTab">All</li></a>
                    <a href=""><li class="subTab">artist</li></a>
                    <a href=""><li class="subTab">art</li></a>
                    <a href=""><li class="subTab">exhibits</li></a>
                    <a href=""><li class="subTab">music</li></a>
                    <a href=""><li class="subTab">poetries</li></a>
                    <a href=""><li class="subTab">transactions</li></a>
                </ul>

                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
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