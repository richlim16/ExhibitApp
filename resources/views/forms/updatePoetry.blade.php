@extends('../formLayout')
@section('content')
    <form action="/updatePoetry" method="post">
        @csrf
        <h1>POETRY FORM</h1>
        <input type="hidden" name="poetryID" value="{{$poetry['id']}}">
        <input type="text" name="poetryTitle" value="{{$poetry['PoetryTitle']}}">
        <input type="hidden" name="artistID" value="{{Auth::user()->id}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection