<!DOCTYPE html>
    <head>
        <title>Sample for IM2</title>
        <style>
            body{
                padding: 0;
                margin: 0;
                background: #eee;
            }
            table{
                border-collapse: collapse;
                width: 50%;
                padding: 20px;

                background: #fff;
                border-radius: 10px;
            }
            td{
                border: 1px solid black;
            }
            th{
                border: 2px solid black;
                background: #aaa;
                margin: 0;
                padding: 0;
            }
            tr{
                text-align: center;
            }
            .container{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .tableContainer{
                display: grid;
                place-items: center;
                margin: 10px;
                padding: 20px;

                width: 50%;
                background: #fff;
                border-radius: 10px;
            }
        </style>
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
            </div>
        </div>
    </body>
</html>