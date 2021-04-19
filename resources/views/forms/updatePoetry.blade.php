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
    <form action="/updatePoetry" method="post">
        @csrf
        <h1>UPDATE POETRY FORM</h1>

        <input type="hidden" name="id" value="{{$poetry['id']}}">

        <label for="poetryTitle">Poetry Title</label>
            <input type="text" name="poetryTitle" value="{{$poetry['PoetryTitle']}}">
        
        <input type="hidden" name="userID" value="{{Auth::user()->id}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection