@extends('../pageLayout')
@section('sidebar')
    <ul id="nav">
        <a href="/"><li class="selected" id="allTab">All</li></a>
        <a href="/artTable"><li class="subTab">art</li></a>
        <a href="/artistTable"><li class="subTab">artist</li></a>
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
                <h2 class='tableName'>Art</h2>
                @if(Auth::check())
                <button class='addData tableBtn'><a href="/newArt">add</a></button>
                @endif
            </div>
            
            <tr>
                <th>ArtID</th>
                <th>Title</th>
                <th>Type</th>
                <th>ArtistID</th>
            </tr>
            @foreach($art as $art)
            <tr>
                <td>{{$art['ArtID']}}</td>
                <td>{{$art['ArtTitle']}}</td>
                <td>{{$art['ArtType']}}</td>
                <td>{{$art['ArtistID']}}</td>
            </tr>
            @endforeach
            
        </table>
    </div>
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

    <div class="tableContainer">
        <table>
            <div class="tableLabel">
                <h2 class='tableName'>Exhibit</h2>
                @if(Auth::check())
                <button class='addData tableBtn'><a href="/newExhibit">add</a></button>
                @endif
            </div>
        <tr>
            <th>Exhibit ID</th>
            <th>Start Date</th>
            <th>Theme</th>
            <th>Transaction ID</th>
        </tr>
            @foreach($exhibit as $exhibit)
            <tr>
                <td>{{$exhibit['ExhibitID']}}</td>
                <td>{{$exhibit['StartDate']}}</td>
                <td>{{$exhibit['Theme']}}</td>
                <td>{{$exhibit['TransactionID']}}</td>
            </tr>
            @endforeach
        </table>
    </div>

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
    <div class="tableContainer">
        <table>
        <div class="tableLabel">
            <h2 class='tableName'>Poetry</h2>
            @if(Auth::check())
            <button class='addData tableBtn'><a href="/newPoetry">add</a></button>
            @endif
        </div>
        <tr>
            <th>Poetry ID</th>
            <th>Title</th>
            <th>Artist ID</th>
        </tr>
            @foreach($poetry as $poetry)
                <tr>
                    <td>{{$poetry['PoetryID']}}</td>
                    <td>{{$poetry['PoetryTitle']}}</td>
                    <td>{{$poetry['ArtistID']}}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="tableContainer">
        <table>
        <div class="tableLabel">
            <h2 class='tableName'>Transaction</h2>
            @if(Auth::check())
            <button class='addData tableBtn'><a href="/newTransaction">add</a></button>
            @endif
        </div>
        <tr>
            <th>Transaction ID</th>
            <th>Transaction Date</th>
            <th>Artist ID</th>
        </tr>
            @foreach($transaction as $transaction)
                <tr>
                    <td>{{$transaction['TransactionID']}}</td>
                    <td>{{$transaction['TransactionDate']}}</td>
                    <td>{{$transaction['ArtistID']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection