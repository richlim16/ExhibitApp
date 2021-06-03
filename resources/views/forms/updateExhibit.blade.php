@extends('../formLayout')

@section('content')

<form action="{{route('exhibit.update', $id)}} " method="post">
    {{csrf_field()}}
    {{ method_field('PATCH') }}

    <h1>EXHIBIT FORM</h1>
    <label for="startDate">Starting Date</label>
        <input type="date" name="startDate" value="<?php use Carbon\carbon; echo Carbon::parse($exhibit->startDate)->toDateString(); ?>" required>
        
    <label for="endDate">Ending Date</label>
        <input type="date" name="endDate" value="<?php echo Carbon::parse($exhibit->endDate)->toDateString(); ?>" required>

    <label for="title">Exhibit Title</label>
        <input type="text" name="title" value="{{$exhibit->title}}">

    <label for="theme">Theme</label>
        <input type="text" name="theme"value="{{$exhibit->theme}}" required>

    <label for="description">Description</label>
        <textarea name="description" cols="30" rows="5 " style="background-color: #2c3454;">{{$exhibit->description}}</textarea>
    <button id="submitBtn"><h3>SUBMIT</h3></button>
</form>


@endsection




@section('content-gallery')
<div style="padding: 50px 0; font-size: 48px">
    Arts
    <hr>
</div>

<div class="tableContainer">

    <form action="/art/addToExhibit/{{$id}}" method="POST">
        @csrf
        <div class="cards-table">
            @foreach($art as $art)

            @if(Auth::user()->admin == false)
                @if(Auth::user()->id == $art['user_id'])
                    <label for="art-{{$art['id']}}">
                        <div class="card hover">
                            <div class="title">
                                <input style="float:left;" id="art-{{$art['id']}}" name="art[]" type="checkbox" value="{{$art['id']}}" @if($art->exhibit_id == $id) checked  @endif>
                                {{$art['title']}}
                            </div>
                            <img src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" style="width:100%" id="img">
                        </div>
                    </label>
                @endif
            @else
                <label for="art-{{$art['id']}}">
                    <div class="card hover">
                        <div class="title">
                            <input style="float:left;" id="art-{{$art['id']}}" name="art[]" type="checkbox" value="{{$art['id']}}" @if($art->exhibit_id == $id) checked  @endif>
                            {{$art['title']}}
                        </div>
                        <img src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" style="width:100%" id="img">
                    </div>
                </label>
            @endif
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

            @if(Auth::user()->admin == false)
                @if(Auth::user()->id == $poetry['user_id'])
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
                @endif
            @else
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
            @endif
            @endforeach
        </div>
        <input type="submit" value="submit">
    </form>
    
</div>
@endsection