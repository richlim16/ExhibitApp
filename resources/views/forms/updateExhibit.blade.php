@extends('../formLayout')

@section('content')
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
                        <input style="float:left; " id="art-{{$art['id']}}" name="art[]" type="checkbox" value="{{$art['id']}}" @if($art->exhibit_id == $id) checked  @endif>
                        {{$art['title']}}
                    </div>
                    <img src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" style="height: 100px; width: 50px; object-fit: cover;" id="img">
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
@endsection