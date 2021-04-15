@extends('../pageLayout')
@section('sidebar')
                <ul id="nav">    
                    <a href="/"><li class="" id="allTab">All</li></a>
                    <a href="#"><li class="selected subTab">art</li></a>
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
@endsection

