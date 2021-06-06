@extends('../formLayout')

@section('sidebar')
<ul id="nav">
    <a href="/">
        <li id="allTab">All</li>
    </a>
    <a href="/artTable">
        <li class="subTab">art</li>
    </a>
    <a href="/exhibitsTable">
        <li class="subTab">exhibits</li>
    </a>
    <a href="/musicTable">
        <li class="subTab">music</li>
    </a>
    <a href="/poetriesTable">
        <li class="subTab">poetries</li>
    </a>
    <a href="/transactionsTable">
        <li class="subTab">transactions</li>
    </a>
    @if(Auth::user()->admin == true)
    <a href="/usersTable">
        <li class="subTab">users</li>
    </a>
    @endif
</ul>
@endsection

@section('content')
<form action="{{route('music.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <h1>MUSIC FORM</h1>

    <label for="title">Art Title</label>
    <input type="text" name="title" required>

    <label for="genre">Genre</label>
    <input type="text" name="genre" required>

    <label for="music">Music</label>
    <input type="file" name="music" required>

    <button id="submitBtn">
        <h3>SUBMIT</h3>
    </button>
</form>

</div>
@endsection