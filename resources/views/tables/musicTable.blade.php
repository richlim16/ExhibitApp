@extends('../pageLayout')
@section('sidebar')

@endsection
@section('content')
<div class="tableContainer">
    @if(Auth::check())
                
        <a class="tableBtn" href="{{route('music.create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </a>

    @endif
    <div class="cards-table">
        @foreach ($music as $music)
            <div class="card">
                <h3>{{$music->title}}</h3>
                <img src="{{asset('storage/music/'.$music->photo)}}" onclick="onClick(this)" alt="music Photo" style="width:100%" id="img">
                <div></div>
                <audio controls src="{{asset('storage/music/'.$music->music)}}"></audio>
                <div>
                    <form action="{{route('music.destroy', $music->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input class="tablerowBtn" type="submit" value="Delete">
                    </form>  
                </div>
            </div>
        @endforeach 
    </div>
       
</div>
@endsection



