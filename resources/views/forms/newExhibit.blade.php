@extends('../formLayout')
@section('content')
    <form action="/insertArtist" method="post">
        @csrf
        <h1>EXHIBIT FORM</h1>
        <label for="StartDate">Starting Date</label>
        <input type="date" name="StartDate" >
        <label for="EndDate">Ending Date</label>
        <input type="date" name="EndDate" >
        <input type="text" name="Theme" placeholder="Exhibit Theme">
        <input type="text" name="TransactionID" placeholder="Transaction ID">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection