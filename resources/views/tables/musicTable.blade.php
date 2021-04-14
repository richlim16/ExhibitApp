@extends('../tableLayout')
@section('sidebar')
                    <a href="/"><li class="" id="allTab">All</li></a>
                    <a href="/artTable"><li class="subTab">art</li></a>
                    <a href="/artistTable"><li class="subTab">artist</li></a>
                    <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
                    <a href="#"><li class="selected subTab">music</li></a>
                    <a href="/poetriesTable"><li class="subTab">poetries</li></a>
                    <a href="/transactionsTable"><li class="subTab">transactions</li></a>
                </ul>
@endsection
@section('content')

            </div>
            <div id="mainSide">
                <div class="tableContainer">
                    <table>
                        <div class="tableLabel">
                            <h2 class='tableName'>Music</h2>
                            @if(Auth::check())
                            <button class='addData tableBtn'><a href="/newMusic">add</a></button>
                            @endif
                        </div>
                        <tr>
                            <th>Music ID</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Artist ID</th>
                        </tr>

                        @foreach($music as $music)
                            <tr>
                                <td>{{$music['MusicID']}}</td>
                                <td>{{$music['MusicTitle']}}</td>
                                <td>{{$music['genre']}}</td>
                                <td>{{$music['ArtistID']}}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>                
            </div>
        </div>
    </body>
</html>
@endsection