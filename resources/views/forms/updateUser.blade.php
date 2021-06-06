@extends('../pageLayout')

@section('content')
    @if($errors->any())
        <h3 style="color: red;">{{$errors->first()}}</h3>
    @endif
    <form action=" {{route('user.update', $user['id'])}} " method="post">
        @csrf
        {{method_field('PATCH')}}
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
                <label style="color:lime">Not Banned</label>
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

        <h3> Admin Status:
            @if($user['admin'] == '0')
                <label style="color:orange">User</label>
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