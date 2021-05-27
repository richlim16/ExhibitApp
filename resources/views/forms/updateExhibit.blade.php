@extends('../formLayout')

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