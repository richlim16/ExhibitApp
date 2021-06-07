@extends('../pageLayout')

@section('content')
    <form action="/updateMusic" autocomplete="off" method="post">
        @csrf   
        <h1>UPDATE MUSIC FORM</h1>

        <input type="hidden" name="id" value="{{$music['id']}}">

        <label for="musicTitle">Music Title</label>
            <input type="text" name="musicTitle" value="{{$music['MusicTitle']}}">

        <label for="genre">Genre</label>
            <input type="text" name="genre" value="{{$music['genre']}}">

        <input type="hidden" name="userID" value="{{Auth::user()->id}}">
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection