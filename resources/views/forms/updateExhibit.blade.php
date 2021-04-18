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
    <form action="/updateExhibit" method="post">
        @csrf
        <h1>UPDATE EXHIBIT FORM</h1>
        <input type="hidden" name="id" value="{{$exhibit['id']}}">

        <label for="StartDate">Starting Date</label>
            <input type="date" name="StartDate">

        <label for="EndDate">Ending Date</label>
            <input type="date" name="EndDate" >

        <label for="Theme">Theme</label>
            <input type="text" name="Theme" value="{{$exhibit['Theme']}}">

        <label for="TransactionID">Transaction ID</label>
            <input type="text" name="TransactionID" value="{{$exhibit['TransactionID']}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection