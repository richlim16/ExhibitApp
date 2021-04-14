@extends('../tableLayout')
@section('sidebar')
                    <a href="/"><li class="" id="allTab">All</li></a>
                    <a href="/artTable"><li class="subTab">art</li></a>
                    <a href="/artistTable"><li class="subTab">artist</li></a>
                    <a href="#"><li class="selected subTab">exhibits</li></a>
                    <a href="/musicTable"><li class="subTab">music</li></a>
                    <a href="/poetriesTable"><li class="subTab">poetries</li></a>
                    <a href="/transactionsTable"><li class="subTab">transactions</li></a>
                </ul>
@endsection
@section('content')

            </div>
            <div id="mainSide">
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
            </div>
        </div>
    </body>
</html>
@endsection