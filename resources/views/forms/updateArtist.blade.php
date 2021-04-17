@extends('../formLayout')
@section('content')
    <form action="/updateArtist" method="post">
        @csrf
        <h1>ARTIST FORM</h1>
        <input type="hidden" name="artistID" value="{{$artist['id']}}">
        <input type="text" name="name" value="{{$artist['name']}}">
        <input type="text" name="EmailAdd" value="{{$artist['EmailAdd']}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection