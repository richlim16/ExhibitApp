@extends('../pageLayout')
@section('sidebar')
                <ul id="nav">    
                    <a href="#"><li class="selected subTab">art</li></a>
                    <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
                    <a href="/musicTable"><li class="subTab">music</li></a>
                    <a href="/poetriesTable"><li class="subTab">poetries</li></a>
                    <a href="/transactionsTable"><li class="subTab">transactions</li></a>
                    @if(Auth::user()->admin == true)
                        <a href="/usersTable"><li class="subTab">users</li></a>
                    @endif
                </ul>
@endsection
@section('content')
<div class="tableContainer">
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
                <th>Title</th>
                <th>Type</th>
                @if(Auth::user()->admin == true)
                    <th>userID</th>
                @endif
                <th class="modifyColumn"></th>
            </tr>
            @foreach($art as $art)
            <tr>
                <td>{{$art['id']}}</td>
                <td>{{$art['ArtTitle']}}</td>
                <td>{{$art['ArtType']}}</td>
                @if(Auth::user()->admin == true)
                    <td>{{$art['userID']}}</td>
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
    </div>
@endsection

