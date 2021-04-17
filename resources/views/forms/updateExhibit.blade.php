@extends('../formLayout')
@section('content')
    <form action="/updateArtist" method="post">
        @csrf
        <h1>EXHIBIT FORM</h1>
        <input type="hidden" name="exhibitID" value="{{$exhibit['id']}}">
        <label for="StartDate">Starting Date</label>
        <input type="date" name="StartDate" >
        <label for="EndDate">Ending Date</label>
        <input type="date" name="EndDate" >
        <input type="text" name="Theme" value="{{$exhibit['Theme']}}">
        <input type="text" name="TransactionID" value="{{$exhibit['TransactionID']}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection