@extends('../pageLayout')
@section('sidebar')
                <ul id="nav">
                    <a href="/"><li class="" id="allTab">All</li></a>
                    <a href="/artTable"><li class="subTab">art</li></a>
                    <a href="/#"><li class="selected subTab">artist</li></a>
                    <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
                    <a href="/musicTable"><li class="subTab">music</li></a>
                    <a href="/poetriesTable"><li class="subTab">poetries</li></a>
                    <a href="/transactionsTable"><li class="subTab">transactions</li></a>
                </ul>
@endsection
@section('content')
                <div class="tableContainer">
                    <table>
                        <div class="tableLabel">
                            <h2 class='tableName'>Artists</h2>
                            @if(Auth::check())
                            <button class='addData tableBtn'><a href="/newArtist">add</a></button>
                            @endif
                        </div>
                        <tr>
                            <th>Artist ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                            @foreach($artist as $artist)
                            <tr>
                                <td>{{$artist['ArtistID']}}</td>
                                <td>{{$artist['name']}}</td>
                                <td>{{$artist['EmailAdd']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    
                </div>
@endsection