@extends('../pageLayout')

@section('content')     
    <div class="tableContainer">
        <table>
            <div class="tableLabel">
                <h2 class='tableName'>Users</h2>
                @if(Auth::check())
                <a class="tableBtn" href=" {{route('user.create')}} ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>
                @endif
            </div>
        <tr>
            <th>userID</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan=2 >Actions</th>
        </tr>
            @foreach($user as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>
                @if($user['admin'] == '0')
                    <a href="/user/changeAdmin/{{$user['id']}}" style="color:orange">User</a>
                @else
                    <a href="/user/changeAdmin/{{$user['id']}}" style="color: Cyan">Admin</a>
                @endif
                </td>
                <td>
                @if($user['isBan'] == '0')
                    <a href="/user/changeBan/{{$user['id']}}" style="color:lime">Not Banned</a>
                @else
                    <a href="/user/changeBan/{{$user['id']}}" style="color:red">Banned</a>
                @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection