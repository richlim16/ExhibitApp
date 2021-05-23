@extends('../formLayout')
@section('sidebar')
<ul id="nav">
    <a href="/">
        <li id="allTab">All</li>
    </a>
    <a href="/artTable">
        <li class="subTab">art</li>
    </a>
    <a href="/exhibitsTable">
        <li class="subTab">exhibits</li>
    </a>
    <a href="/musicTable">
        <li class="subTab">music</li>
    </a>
    <a href="/poetriesTable">
        <li class="subTab">poetries</li>
    </a>
    <a href="/transactionsTable">
        <li class="subTab">transactions</li>
    </a>
    @if(Auth::user()->admin == true)
    <a href="/usersTable">
        <li class="subTab">users</li>
    </a>
    @endif
</ul>
@endsection

@section('content')

<h1>exhibit id = {{$exhibit->id}} </h1>
<form action=""></form>
@foreach ($art as $art)
    <label for=" {{$art->id}} ">{{$art->title}}</label>
    <input type="checkbox" name=" {{$art->id}} " value="">
@endforeach
@endsection