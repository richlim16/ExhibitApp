@extends('../pageLayout')

@section('content')

<form action="{{route('exhibit.update', $id)}} " method="post">
    {{csrf_field()}}
    {{ method_field('PATCH') }}

    <h1>EXHIBIT FORM</h1>
    <h3>Status : {{$exhibit->status}} </h3>
    @if($exhibit->status == 'pending')
        <h3 style="color: red;">Please send the agreed amount of Php 3,000 to through any of our accounts below, and fill in the reference number in the form below.<br>
        BPI : 9952112345<br>
        Metrobank : 31983719382<br>
        GCash : 0995 123 4567<br>
        </h3>
    @endif
    <label for="startDate">Starting Date</label>
        <input type="date" name="startDate" value="<?php use Carbon\carbon; echo Carbon::parse($exhibit->startDate)->toDateString(); ?>" required>
        
    <label for="endDate">Ending Date</label>
        <input type="date" name="endDate" value="<?php echo Carbon::parse($exhibit->endDate)->toDateString(); ?>" required>

    <label for="title">Exhibit Title</label>
        <input type="text" name="title" value="{{$exhibit->title}}" required>

    <label for="theme">Theme</label>
        <input type="text" name="theme"value="{{$exhibit->theme}}" required>

    <label for="referenceNum">Reference Number</label>
        @if($exhibit->referenceNum == NULL)
            <input type="text" name="referenceNum">
        @else
            <input type="text" name="referenceNum" value="{{$exhibit->referenceNum}}" readonly>
        @endif
    <label for="description">Description</label>
        <textarea name="description" cols="30" rows="5 " style="background-color: #2c3454;">{{$exhibit->description}}</textarea>
    @if(Auth::user()->admin == 1)
        <label for="status">Status</label>
        <select style="background-color: #2c3454;" name="status" id="status">
            <option value="pending">Pending</option>
            <option value="paid">Paid</option>
            <option value="completed">Completed</option>
        </select>
    @endif
    <button id="submitBtn"><h3>SUBMIT</h3></button>
</form>

<div style="padding: 50px 0; font-size: 48px">
    Arts
    <hr>
</div>

<div class="tableContainer">

    <form action="/art/addToExhibit/{{$id}}" method="POST">
        @csrf
        <div class="cards-table">
            @foreach($art as $art)
                    <label for="art-{{$art['id']}}">
                        <div class="card hover">
                            <div class="title">
                                <input style="float:left;" id="art-{{$art['id']}}" name="art[]" type="checkbox" value="{{$art['id']}}" @if($art->exhibit_id == $id) checked  @endif>
                                {{$art['title']}}
                            </div>
                            <img src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" style="width:100%" id="img">
                        </div>
                    </label>
            @endforeach
        </div>
        <input type="submit" value="submit">
    </form>
</div>
        
<div style="padding: 50px 0; font-size: 48px">
    Poetry
    <hr>
</div>

<div class="tableContainer">
    <form action="/poetry/addToExhibit/{{$id}}" method="POST">
        @csrf
        <div class="cards-table">
            @foreach($poetry as $poetry)
           
                <label for="poetry-{{$poetry['id']}}">
                    <div class="poetry-card hover">
                        <div class="title">
                            <input style="float:left;" id="poetry-{{$poetry['id']}}" name="poetry[]"type="checkbox" value="{{$poetry['id']}}" @if($poetry->exhibit_id == $id) checked  @endif>
                            "{{$poetry['title']}}"
                        </div>
                        <div style="background-color: #1e3c86; overflow-y:scroll; padding: 15px 25px">
                            {{$poetry['body']}}
                        </div>
                    </div>
                </label>
            @endforeach
        </div>
        <input type="submit" value="submit">
    </form>
</div>

<div style="padding: 50px 0; font-size: 48px">
    Music
    <hr>
</div>
<div class="tableContainer">
    <form action="/music/addToExhibit/{{$id}}" autocomplete="off" method="POST">
        @csrf
        <div class="cards-table">

            @foreach($music as $music)
            <label for="music-{{$music['id']}}">
                <div class="music-card hover">
                    <div class="title">
                        <input style="float:left;" id="music-{{$music['id']}}" name="music[]" type="checkbox"
                            value="{{$music['id']}}" @if($music->exhibit_id == $id) checked @endif>
                        "{{$music['title']}}"
                    </div>
                    <audio controls src="{{asset('storage/music/'.$music->music)}}"></audio>
                </div>
            </label>
            @endforeach
        </div>
        <input type="submit" value="submit">
    </form>

</div>
@endsection