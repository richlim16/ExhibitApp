<!DOCTYPE html>
<head>
    <title>Registration Page</title>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <link href="{{URL::asset('css/pageStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/topbarStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/sidenavStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/tableStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/popupStyle.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/formStyle.css')}}" rel="stylesheet">
</head>
<body>
    <div id="topbar">
        <div id="userArea">
        </div>

        <h1 id="title"><a href=''>XHIBIT Registration</a></h1>

        <div></div>

        </div>
    </div>

    <div id="loginPage">
        <div id="loginForm">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="name" class="">{{ __('Name') }}</label>
                    <br>
                    <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    <br>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <label for="password" class="">{{ __('Password') }}</label>
                    <br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                    <br>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                     
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>

                    <br>
            </form>
        </div>
    </div>

   
</body>
</html>