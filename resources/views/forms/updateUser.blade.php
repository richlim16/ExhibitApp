@extends('../formLayout')

@section('content')
    <form action=" {{route('user.update', $user['id'])}} " method="post">
        @csrf
        <h1>USER FORM</h1>

        </br>
        <input type="hidden" name="id"value="{{$user['id']}}">
        <label for="name">Name</label>
            <input type="text" name="name" required value="{{$user['name']}}">
        <label for="email">Email Address</label>
            <input type="email" name="email" required value="{{$user['email']}}">
            @method('PUT')
        <h3> Ban Status:
            @if($user['isBan'] == '0')
                <label style="color:blue">Not Banned</label>
            @elseif($user['isBan'] == '1')
                <label style="color:red">Banned</label>
            @endif
        </h3>
        <div>
            <select style="background-color: #2c3454;" name="isBan">
                <option value="">Select Ban or Unban</option>
                <option value="0">Unban</option>
                <option value="1">Ban</option>
            </select>
        </div>
        </br>
        <!-- <label for="password">Password</label> -->
        <h3> Ban Status:
            @if($user['admin'] == '0')
                <label style="color:blue">User</label>
            @elseif($user['admin'] == '1')
                <label style="color:red">Admin</label>
            @endif
        </h3>
        <select style="background-color: #2c3454;" name="admin">
                <option value="">Select Admin or User</option>
                <option value="0">User</option>
                <option value="1">Admin</option>
        </select>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>

  
@endsection