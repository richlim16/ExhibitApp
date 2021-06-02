@extends('../formLayout')

@section('sidebar')
    <ul id="nav">
        <a href="/"><li id="allTab">All</li></a>
        <a href="/artTable"><li class="subTab">art</li></a>
        <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
        <a href="/musicTable"><li class="subTab">music</li></a>
        <a href="/poetriesTable"><li class="subTab">poetries</li></a>
        <a href="/transactionsTable"><li class="subTab">transactions</li></a>
        @if(Auth::user()->admin == true)
            <a href="/usersTable"><li class="subTab">users</li></a>
        @endif
    </ul>
@endsection
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