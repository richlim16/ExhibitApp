@extends('../formLayout')
@section('content')
    <form action="/updateMusic" method="post">
        @csrf   
        <h1>MUSIC FORM</h1>
        <input type="hidden" name="musicID" value="{{$music['id']}}">
        <input type="text" name="musicTitle" value="{{$music['MusicTitle']}}">
        <input type="text" name="genre" value="{{$music['genre']}}">
        <input type="hidden" name="artistID" value="{{Auth::user()->id}}">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection