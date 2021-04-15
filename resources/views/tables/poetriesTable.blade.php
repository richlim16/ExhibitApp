@extends('../pageLayout')
@section('sidebar')
                <ul id="nav">
                    <a href="/"><li class="" id="allTab">All</li></a>
                    <a href="/artTable"><li class="subTab">art</li></a>
                    <a href="/artistTable"><li class="subTab">artist</li></a>
                    <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
                    <a href="/musicTable"><li class="subTab">music</li></a>
                    <a href="#"><li class="selected subTab">poetries</li></a>
                    <a href="/transactionsTable"><li class="subTab">transactions</li></a>
                </ul>
@endsection
@section('content')
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

@endsection