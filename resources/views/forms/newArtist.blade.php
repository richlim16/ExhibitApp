@extends('../formLayout')
@section('content')
    <form action="/insertArtist" method="post">
        @csrf
        <h1>ARTIST FORM</h1>
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="EmailAdd" placeholder="Your Email">
        <button><h3>SUBMIT</h3></button>
    </form>
@endsection