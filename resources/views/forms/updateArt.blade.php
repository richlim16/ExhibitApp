@extends('../formLayout')

@section('content')
    <form action="{{route('art.update', $art->id)}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        
        
        <label for="title">Art Title</label>
            <input type="text" name="title" value="{{$art->title}}">

        <label for="description">Description</label>
            <input type="text" name="description" value="{{$art->description}}">

        <label for="theme">Theme</label>
            <input type="text" name="theme" value="{{$art->theme}}">

        <div class="fileDiv">
            <div id="img-prev">
                <img onclick="onClick(this)" src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" id="img">
            </div>
            <input style="display:none;" type="file" accept="image/*" id="choose-file" name="photo">
            <div class="fileBtn" onClick="fileup()">Choose Photo</div>
        </div>

        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>

    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  
  <div class="modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>


<script>
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    }
</script>
@endsection