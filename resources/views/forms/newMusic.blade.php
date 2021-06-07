@extends('../pageLayout')

@section('content')
<form action="{{route('music.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <h1>MUSIC FORM</h1>

    <label for="title">Music Title</label>
    <input type="text" name="title" required>

    <label for="genre">Genre</label>
    <input type="text" name="genre" required>

    <label for="music">Music</label>
    <input type="file" name="music" required>

    <button id="submitBtn">
        <h3>SUBMIT</h3>
    </button>
</form>

</div>
@endsection