@extends('../pageLayout')
@section('sidebar')

@endsection
@section('content')
<div class="tableContainer">
    @if(Auth::check())
                
        <a class="tableBtn" href="{{route('poetry.create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </a>

    @endif  
</div>

<div class="tableContainer">
    <div class="cards-table">
        @foreach($poetry as $poetry)

        @if(Auth::user()->admin == false)
            @if(Auth::user()->id == $poetry['user_id'])
            <div class="poetry-card">
                <div class="title">
                    "{{$poetry['title']}}"
                </div>
                
                <div style="background-color: #1e3c86; overflow-y:scroll; padding: 15px 25px">
                    {{$poetry['body']}}
                </div>

                <div>
                    <hr>  
                    <div class="theme-title">
                        {{$poetry['theme']}}
                    </div>  
                </div>

                <div>
                    <form action="{{route('poetry.edit', $poetry->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                        @csrf
                        <input class="tablerowBtn" type="submit" value="Edit">
                    </form>
            
                    <form action="{{route('poetry.destroy', $poetry->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input class="tablerowBtn" type="submit" value="Delete">
                    </form>  
            
                </div>
            </div>
            @endif
        @else
            <div class="poetry-card">
                <div class="title">
                    "{{$poetry['title']}}"
                </div>
                
                <div style="background-color: #1e3c86; overflow-y:scroll; padding: 15px 25px">
                    {{$poetry['body']}}
                </div>

                <div>
                    <hr>  
                    <div class="theme-title">
                        {{$poetry['theme']}}
                    </div>  
                </div>

                <div>
                    <form action="{{route('poetry.edit', $poetry->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                        @csrf
                        <input class="tablerowBtn" type="submit" value="Edit">
                    </form>
            
                    <form action="{{route('poetry.destroy', $poetry->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <input class="tablerowBtn" type="submit" value="Delete">
                    </form>  
            
                </div>
            </div>
        @endif
        @endforeach
    </div>  
</div>
@endsection