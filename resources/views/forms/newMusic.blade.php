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
    <form action="/insertMusic" method="post">
        @csrf   
        <h1>MUSIC FORM</h1>
        <label for="musicTitle">Music Title</label>
            <input type="text" name="musicTitle" required>

        <label for="genre">Genre</label>
            <input type="text" name="genre" required>

        <input type="hidden" name="artistID" value="{{Auth::user()->id}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection