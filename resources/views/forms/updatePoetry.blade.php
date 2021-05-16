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
    <form action="{{route('poetry.update', $poetry->id)}}" method="post">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <h1>POETRY FORM</h1>

        <label for="title">Poetry Title</label>
            <input type="text" name="title" value="{{$poetry->title}}"required>

        <label for="body">Body</label>
            <textarea name="body" cols="30" rows="10">{{$poetry->body}}</textarea>

        <label for="theme">Theme</label>
            <input type="text" name="theme" value="{{$poetry->theme}}"required>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection