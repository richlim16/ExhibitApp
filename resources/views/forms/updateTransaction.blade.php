@extends('../formLayout')

@section('content')
    <form action="/updateTransaction" method="post">
        @csrf
        <h1>UPDATE TRANSACTION FORM</h1>

        <input type="hidden" name="id" value="{{$transaction['id']}}">

        <label for="transactionDate">Date of Transaction</label>
            <input type="date" name="transactionDate">

        <label for="artisID">Artist ID</label>
            <input type="text" name="userID" value="{{$transaction['userID']}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection