@extends('../formLayout')
@section('content')
    <form action="/insertArt" method="post">
        @csrf
        <h1>ART FORM</h1>
        <input type="text" name="artTitle" placeholder="Art Title">
        <input type="text" name="artType" placeholder="Art Type (music / poetry)">
        <input type="hidden" name="artistID" value="{{Auth::user()->id}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection