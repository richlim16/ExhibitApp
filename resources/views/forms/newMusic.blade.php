@extends('../formLayout')
@section('content')
    <form action="/insertMusic" method="post">
        @csrf   
        <h1>MUSIC FORM</h1>
        <input type="text" name="musicTitle" placeholder="Music Title">
        <input type="text" name="genre" placeholder="Genre">
        <input type="text" name="artistID" placeholder="Artist ID">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection