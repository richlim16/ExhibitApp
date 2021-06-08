@extends('../pageLayout')

@section('content')
<form action="{{route('music.store')}}" autocomplete="off" enctype="multipart/form-data" method="post">
    @csrf
    <h1>MUSIC FORM</h1>

<<<<<<< HEAD
    <label for="title">Music Title</label>
=======
    <label for="title">Song Name</label>

>>>>>>> e9abad17355d83f349b7eb7c512e64e48fb77d8c
    <input type="text" name="title" required>

    <label for="genre">Genre</label>
    <input type="text" name="genre" required>

    <label for="music">Music</label>
    <input type="file" name="music" required>

    <div class="fileDiv">
            <div id="img-prev">
                <p>No File Chosen</p>
            </div>
            <input type="file" style="display:none;" accept="image/*" id="choose-file" name="photo" required>
                <div class="fileBtn"  onClick="fileup()">Choose Thumbnail</div>
    </div>

    <button id="submitBtn">
        <h3>SUBMIT</h3>
    </button>
</form>

</div>
@endsection