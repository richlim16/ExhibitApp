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
    <form action="/insertUser" method="post">
        @csrf
        <h1>ART FORM</h1>
        <input type="hidden" name="id"value="{{$user['id']}}">
        <label for="name">Name</label>
            <input type="text" name="name" required value="{{$user['name']}}">
        <label for="email">Art Type (music / poetry)</label>
            <input type="email" name="email" required value="{{$user['email']}}">

        <!-- <label for="password">Password</label> -->
            <input type="hidden" name="password" required value="{{$user['password']}}">
        <label for="admin">Admin Privileges</label>
            <input type="checkbox" name="admin"value="{{$user['admin']}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection