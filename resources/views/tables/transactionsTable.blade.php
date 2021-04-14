@extends('../tableLayout')
@section('sidebar')
                    <a href="/"><li class="" id="allTab">All</li></a>
                    <a href="/artTable"><li class="subTab">art</li></a>
                    <a href="/artistTable"><li class="subTab">artist</li></a>
                    <a href="/exhibitsTable"><li class="subTab">exhibits</li></a>
                    <a href="/musicTable"><li class="subTab">music</li></a>
                    <a href="/poetriesTable"><li class="subTab">poetries</li></a>
                    <a href="#"><li class="selected subTab">transactions</li></a>
                </ul>
@endsection
@section('content')
            </div>
            <div id="mainSide">
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
            </div>      
        </div>
    </body>
</html>
@endsection