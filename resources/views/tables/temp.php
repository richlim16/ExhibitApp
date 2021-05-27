    <table>
        <div class="tableLabel">
            <h2 class='tableName'>Art</h2>
            @if(Auth::check())
            
            <a class="tableBtn" href="{{route('art.create')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>

            @endif
        </div>
        
        <tr>
            <th>id</th>
            <th>description</th>
            <th>theme</th>
            <th>Type</th>
            <th>photo</th>
            @if(Auth::user()->admin == true)
                <th>user-id</th>
            @endif
            <th class="modifyColumn"></th>
        </tr>

        <div></div>
        @foreach($art as $art)
        <tr>
            <td>{{$art['id']}}</td>
            <td>{{$art['title']}}</td>
            <td>{{$art['description']}}</td>
            <td>{{$art['theme']}}</td>
            <td>
                <img src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" style="width:100%" id="img">
            </td>
            @if(Auth::user()->admin == true)
                <td>{{$art['user-id']}}</td>
            @endif
            <td class="btnCell">                
                <form action="{{route('art.edit', $art->id)}}" method="post">
                    <input type="hidden" name="_method" value="GET">
                    @csrf
                    <input class="tablerowBtn" type="submit" value="Edit">
                </form>
        
                <form action="{{route('art.destroy', $art->id)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <input class="tablerowBtn" type="submit" value="Delete">
                </form>      
            </td>
        </tr>
        @endforeach
        
    </table>