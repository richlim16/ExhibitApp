<!DOCTYPE html>
    <head>
        <title>Main Page</title>
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="topbar">
            <h1 id="title"><a href=''>XHIBIT</a></h1>
            

            <div id="logoutBtn">
                <a href="">
                    <div id="logoutText">LOG OFF</div>
                        <img id="logoutIcon" src="{{URL::asset('icons/log out.svg')}}" alt="">
                </a>
            </div>
        </div>

        <div id="container">
    
            <div id="sidenav">
                <h2 id="label">TABLES</h2>
                <ul id="nav">
                    <a href=""><li class="selected" id="allTab">All</li></a>
                    <a href=""><li class="subTab">artist</li></a>
                    <a href=""><li class="subTab">art</li></a>
                    <a href=""><li class="subTab">exhibits</li></a>
                    <a href=""><li class="subTab">music</li></a>
                    <a href=""><li class="subTab">poetries</li></a>
                    <a href=""><li class="subTab">transactions</li></a>
                </ul>
            </div>
            <div id="mainSide">
                <div class="tableContainer">
                    <table>
                        <div class="tableLabel">
                            <h2 class='tableName'>art</h2>
                            <button class='deleteData  tableBtn'>delete</button>
                            <button class='addData tableBtn'><a href="/newArt">add</a></button>
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
                            <h2 class='tableName'>artists</h2>
                            <button class='deleteData  tableBtn'>delete</button>
                            <button class='addData tableBtn'>add</button>
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
                            <h2 class='tableName'>exhibit</h2>
                            <button class='deleteData  tableBtn'>delete</button>
                            <button class='addData tableBtn'>add</button>
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
                            <h2 class='tableName'>music</h2>
                            <button class='deleteData  tableBtn'>delete</button>
                            <button class='addData tableBtn'>add</button>
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
                        <h2 class='tableName'>poetry</h2>
                        <button class='deleteData  tableBtn'>delete</button>
                        <button class='addData tableBtn'>add</button>
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
                        <h2 class='tableName'>transaction</h2>
                        <button class='deleteData  tableBtn'>delete</button>
                        <button class='addData tableBtn'>add</button>
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
            </div>

            
        </div>
    </body>
</html>