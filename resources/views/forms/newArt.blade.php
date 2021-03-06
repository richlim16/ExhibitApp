@extends('../pageLayout')


@section('content')
    <form action="{{route('art.store')}}"  enctype="multipart/form-data" autocomplete="off" method="post">
        @csrf
        <h1>ART FORM</h1>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <div class="fileDiv">
            <div id="img-prev">
                <p>No File Chosen</p>
            </div>
            <input style="display:none;" type="file" accept="image/*" id="choose-file" name="photo" required>
                <div class="fileBtn"  onClick="fileup()">Choose Photo</div>
        </div>
        
        <label for="title">Art Title</label>
            <input type="text" name="title" required>

        <label for="description">Description</label>
            <input type="text" name="description" required>

        <label for="theme">Theme</label>
            <input type="text" name="theme" required>

        

        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
    
</div>
@endsection