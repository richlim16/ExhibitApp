<!DOCTYPE html>
    <head>
        <title>Sample for IM2</title>
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="tableContainer">
                <table>
                    <h3>Art table</h3>
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
                <button class="insertButton"><a href="/newArt">Insert Art</a></button>
            </div>
            <div class="tableContainer">
                <table>
                    <h3>Artist Table</h3>
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
                <button class="insertButton"><a href="/newArtist">Insert Artist</a></button>
            </div>
            <div class="tableContainer">
                <table>
                <h3>Exhibit Table</h3>
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
                <button class="insertButton"><a href="/newExhibit">Insert Exhibit</a></button>
            </div>
            <div class="tableContainer">
                <table>
            <h3>Music Table</h3>
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
                <button class="insertButton"><a href="/newMusic">Insert Music</a></button>
            </div>
            <div class="tableContainer">
                <table>
            <h3>Poetry Table</h3>
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
                <button class="insertButton"><a href="/newPoetry">Insert Poetry</a></button>
            </div>
            <div class="tableContainer">
                <table>
            <h3>Transaction Table</h3>
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
                <button class="insertButton"><a href="/newTransaction">Insert Transaction</a></button>
            </div>
        </div>
    </body>
</html>