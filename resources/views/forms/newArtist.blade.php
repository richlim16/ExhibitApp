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
    <form action="/insertArtist" method="post">
        @csrf
        <h1>ARTIST FORM</h1>

        <label for="name">Artist Name</label>
            <input type="text" name="name" required>

        <label for="artistEmail">Email</label>
            <input type="text" name="EmailAdd" required>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection