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

    <form action="/insertExhibit" method="post">
        @csrf
        <h1>EXHIBIT FORM</h1>
        <label for="StartDate">Starting Date</label>
            <input type="date" name="StartDate" required>

        <label for="EndDate">Ending Date</label>
            <input type="date" name="EndDate" required>

        <label for="Theme">Exhibit Theme</label>
            <input type="text" name="Theme" required>

        <label for="TransactionID">Trasaction ID</label>
            <input type="text" name="TransactionID" required>

        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection