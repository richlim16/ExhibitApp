@extends('../formLayout')
@section('sidebar')
<ul id="nav">
        <a href="/"><li id="allTab">All</li></a>
        <a href="{{route('art.index')}}"><li class="subTab">art</li></a>
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
    <form action="{{route('poetry.store')}}" method="post">
        @csrf
        <h1>POETRY FORM</h1>

        <label for="title">Poetry Title</label>
            <input type="text" name="title" required>

        <label for="body">Body</label>
            <textarea  style="font-size: 2vh; background-color:#2c3454; padding: 15px 20px;" name="body" cols="30" rows="10"></textarea>

        <label for="theme">Theme</label>
            <input type="text" name="theme" required>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection