@extends('../formLayout')
@section('sidebar')
    <ul id="nav">
        <a href="/"><li id="allTab">All</li></a>
        <a href="/artTable"><li class="subTab">art</li></a>
        <a href="/artistTable"><li class="subTab">artist</li></a>
        <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
        <a href="/musicTable"><li class="subTab">music</li></a>
        <a href="/poetriesTable"><li class="subTab">poetries</li></a>
        <a href="/transactionsTable"><li class="subTab">transactions</li></a>
    </ul>
@endsection
@section('content')
    <form action="/updateArtist" method="post">
        @csrf
        <h1>UPDATE ARTIST FORM</h1>

        <input type="hidden" name="artistID" value="{{$artist['id']}}">

        <label for="name">Name</label>
            <input type="text" name="name" value="{{$artist['name']}}">

        <label for="EmailAdd">Email Address</label>
            <input type="text" name="EmailAdd" value="{{$artist['EmailAdd']}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection