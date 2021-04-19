@extends('../pageLayout')
@section('sidebar')
    <ul id="nav">
        <a href="/"><li class="selected" id="allTab">All</li></a>
        <a href="/artTable"><li class="subTab">art</li></a>
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
                <a class="tableBtn" href="/newArt">
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
                    <form action="/updateArtForm" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$art['id']}}">
                        <input class="tablerowBtn" type="submit" value="Edit">
                    </form>
            
                    <form action="/deleteArt" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$art['id']}}">
                        <input class="tablerowBtn" type="submit" value="Delete">
                    </form>      
                </td>
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
            <th class="modifyColumn"></th>
        </tr>
            @foreach($exhibit as $exhibit)
            <tr>
                <td>{{$exhibit['id']}}</td>
                <td>{{$exhibit['StartDate']}}</td>
                <td>{{$exhibit['Theme']}}</td>
                <td>{{$exhibit['TransactionID']}}</td>

                <td class="btnCell">
                    <form action="/updateExhibitForm" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$exhibit['id']}}">
                        <input class="tablerowBtn" type="submit" value="Edit">
                    </form>
            
                    <form action="/deleteExhibit" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$art['id']}}">
                        <input class="tablerowBtn" type="submit" value="Delete">
                    </form>
                </td>
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
                @if(Auth::user()->admin == true)
                    <th>userID</th>
                @endif
                <th class="modifyColumn"></th>
            </tr>

            @foreach($music as $music)
                <tr>
                    <td>{{$music['id']}}</td>
                    <td>{{$music['MusicTitle']}}</td>
                    <td>{{$music['genre']}}</td>
                    @if(Auth::user()->admin == true)
                        <td>{{$music['userID']}}</td>
                    @endif

                    <td class="btnCell">
                        <form action="/updateMusicForm" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$music['id']}}">
                            <input class="tablerowBtn" type="submit" value="Edit">
                        </form>
                
                        <form action="/deleteMusic" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$art['id']}}">
                            <input class="tablerowBtn" type="submit" value="Delete">
                        </form>
                    </td>
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
            @if(Auth::user()->admin == true)
                <th>userID</th>
            @endif
            <th class="modifyColumn"></th>
        </tr>
            @foreach($poetry as $poetry)
                <tr>
                    <td>{{$poetry['id']}}</td>
                    <td>{{$poetry['PoetryTitle']}}</td>
                    @if(Auth::user()->admin == true)
                        <td>{{$poetry['userID']}}</td>
                    @endif

                    <td class="btnCell">
                        <form action="/updatePoetryForm" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$poetry['id']}}">
                            <input class="tablerowBtn" type="submit" value="Edit">
                        </form>
                
                        <form action="/deletePoetry" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$art['id']}}">
                            <input class="tablerowBtn" type="submit" value="Delete">
                        </form>
                    </td>
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
            @if(Auth::user()->admin == true)
                <th>userID</th>
            @endif
            <th class="modifyColumn"></th>
        </tr>
            @foreach($transaction as $transaction)
                <tr>
                    <td>{{$transaction['id']}}</td>
                    <td>{{$transaction['TransactionDate']}}</td>
                    @if(Auth::user()->admin == true)
                        <td>{{$transaction['userID']}}</td>
                    @endif

                    <td class="btnCell">
                        <form action="/updateTransactionForm" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$transaction['id']}}">
                            <input class="tablerowBtn" type="submit" value="Edit">
                        </form>
                
                        <form action="/deleteTransaction" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$transaction['id']}}">
                            <input class="tablerowBtn" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @if(Auth::user()->admin == true)
    <div class="tableContainer">
        <table>
            <div class="tableLabel">
                <h2 class='tableName'>Users</h2>
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
            <th>userID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Admin</th>
            <th class="modifyColumn"></th>
        </tr>
        
        
            @foreach($user as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['admin']}}</td>

                <td class="btnCell">
                    <form action="/updateUserForm" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$exhibit['id']}}">
                        <input class="tablerowBtn" type="submit" value="Edit">
                    </form>
            
                    <form action="/deleteUser">
                        @csrf
                        <input type="hidden" name="id" value="{{$transaction['id']}}">
                        <input class="tablerowBtn" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        
        </table>
    </div>
    @endif
@endsection