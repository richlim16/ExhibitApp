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
                <a class="tableBtn" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-file-earmark-minus" viewBox="0 0 16 16">
                    <path d="M5.5 9a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                    </svg>
                </a>

                <a class="tableBtn" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
                    

                <a class="tableBtn" href="/newArt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>
                @endif
            </div>
            
            <tr>
                <th>ArtID</th>
                <th>Title</th>
                <th>Type</th>
                <th>ArtistID</th>
                <th class="modifyColumn"></th>
            </tr>
            @foreach($art as $art)
            <tr>
                <td>{{$art['ArtID']}}</td>
                <td>{{$art['ArtTitle']}}</td>
                <td>{{$art['ArtType']}}</td>
                <td>{{$art['ArtistID']}}</td>
                <td>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                        <div id="myDropdown" class="dropdown-content">
                            <form action="">
                                <input class="tablerowBtn" type="submit" value="Edit">
                            </form>

                            <form action="">
                                <input class="tablerowBtn" type="submit" value="Delete">
                            </form>
                            
                            
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
    <div class="tableContainer">
        <table>
            <div class="tableLabel">
                <h2 class='tableName'>Artists</h2>
                @if(Auth::check())
                <a class="tableBtn" href="/newArtist">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>

                
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
                <a class="tableBtn" href="/newExhibit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>
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
                <a class="tableBtn" href="/newMusic">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </a>

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
            <a class="tableBtn" href="/newPoetry">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>
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
            <a class="tableBtn" href="/newTransaction">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>
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