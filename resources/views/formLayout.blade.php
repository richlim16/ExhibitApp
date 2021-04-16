<html>
    <head>
    <style>
        a{
            text-decoration: none;
            color: #111;
        }
        body{
            background: #eee;
            margin: 0;
            padding: 0;

            font-family: calibri;
        }
        .container{
            padding: 20px;
        }
        .homeBtn{
            background: #ddd;
            border: 3px solid #111;
            border-radius: 5px;
            padding: 5px;
            font-size: 15px;
        }
        .formContainer{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 800px;
        }
        form{
            display: flex;
            flex-direction: column;
            background: #111;
            color: #eee;
            padding: 50px;
            border: 5px solid #aaa;
        }
        form h1{
            margin: auto;
            margin-bottom: 20px;
        }
        label{
            padding: 5px;

        }
        input[type=text], input[type=date]{
            width: 300px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 3px solid #fff;
            padding: 5px;
            transition: .2s;
            background: #111;
            color: #fff;
        }
        input[type=text]:focus, input[type=date]:focus{
            border-bottom: 3px solid #fa0;
            outline: none;
        }
        form button{
            margin: auto;
            background: #111;
            color: #eee;
            border: 3px solid #eee;
            width: 50%;
            transition: .2s;
        }
        form button:hover{
            color: #fa0;
            border: 3px solid #fa0;
        }
    </style>
    </head>
    <body>
        
        <div class="container">
            <button class="homeBtn"><a href="/">Home</a></button>
            <div class="formContainer">
                @yield('content')
            </div>
        </div>      
    </body>
</html>