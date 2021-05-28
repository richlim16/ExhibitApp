@extends('../pageLayout')
@section('sidebar')

@endsection
@section('content')
<div style="padding: 50px 0; font-size: 48px">
    Arts
    <hr>
</div>

<div class="tableContainer">

        <form action="">  
            <div class="cards-table">
            @foreach($art as $art)
                <label for="art-{{$art['id']}}">
                    <div class="card hover">
                        <div class="title">
                            <input  style="float:left;"  id="art-{{$art['id']}}" type="checkbox" value="{{$art['id']}}">
                            "{{$art['title']}}"
                        </div>
                        <img src="{{asset('storage/art/'.$art->photo)}}"  alt="Art Photo" style="width:100%" id="img"> 
                    </div>
                </label>
            @endforeach
        </form>
</div> -->

<div style="padding: 50px 0; font-size: 48px">
    Poetry
    <hr>
</div>

<div class="tableContainer">
    <div class="cards-table">
            @foreach($poetry as $poetry)
                <label for="poetry-{{$poetry['id']}}">
                    <div class="poetry-card hover">
                        <div class="title">
                            <input  style="float:left;" id="poetry-{{$poetry['id']}}" type="checkbox" value="{{$poetry['id']}}">
                            "{{$poetry['title']}}"
                        </div>
                        <div style="background-color: #1e3c86; overflow-y:scroll; padding: 15px 25px">
                                {{$poetry['body']}}           
                        </div>
                    </div>
                </label>
            @endforeach
        </div>  
</div> 



@endsection