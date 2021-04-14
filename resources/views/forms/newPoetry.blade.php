@extends('../formLayout')
@section('content')
    <form action="/insertPoetry" method="post">
        @csrf
        <h1>POETRY FORM</h1>
        <input type="text" name="poetryTitle" placeholder="Poetry Title">
        <input type="hidden" name="artistID" value="{{Auth::user()->id}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection