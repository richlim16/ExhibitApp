@extends('../pageLayout')

@section('content')
    <form action="/insertTransaction" autocomplete="off" method="post">
        @csrf
        <h1>TRANSACTION FORM</h1>
        
        <label for="transactionDate">Date of Transaction</label>
            <input type="date" name="transactionDate" required>
        <input type="hidden" name="userID" value="{{Auth::user()->id}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection