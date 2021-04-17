@extends('../formLayout')
@section('content')
    <form action="/updateTransaction" method="post">
        @csrf
        <h1>TRANSACTION FORM</h1>
        <input type="hidden" name="transactionID" value="{{$transaction['id']}}">
        <label for="transactionDate">Date of Transaction</label>
        <input type="date" name="transactionDate">
        <input type="text" name="artistID" value="{{$transaction['ArtistID']}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection