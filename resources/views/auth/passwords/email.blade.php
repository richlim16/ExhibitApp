

<!DOCTYPE html>
<head>
    <title>Password reset Page</title>
        
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

            <h1 id="title"><a href=''>XHIBIT</a></h1>

            <div></div>

</div>

<div id="loginPage">
    <div id="loginForm">
        <div class="" >{{ __('Reset Password') }}</div>
        </br>
        <div >
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" id="loginBtn">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

