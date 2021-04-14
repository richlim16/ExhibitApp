@extends('../formLayout')
@section('content')
    <form action="/insertTransaction" method="post">
        @csrf
        <h1>TRANSACTION FORM</h1>
        <label for="transactionDate">Date of Transaction</label>
        <input type="date" name="transactionDate">
        <input type="hidden" name="artistID" value="{{Auth::user()->id}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection