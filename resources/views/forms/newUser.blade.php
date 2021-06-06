@extends('../pageLayout')
@section('content')
    @if($errors->any())
        <h3 style="color: red;">{{$errors->first()}}</h3>
    @endif
    <form action=" {{route('user.store')}} " method="post">
        @csrf
        <h1>USER FORM</h1>

        <label for="name">Name</label>
            <input type="text" name="name" required value="{{old('name')}}"autocomplete="off">
        <label for="email">Email Address</label>
            <input type="email" name="email" required value="{{old('email')}}"autocomplete="off">
        <label for="password">Password</label>
            <input type="password" name="password" required>
        <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation">
        <label for="admin">Admin Privileges</label>
            <input type="checkbox" name="admin" checked="checked" />
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection