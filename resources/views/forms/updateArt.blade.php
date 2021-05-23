@extends('../formLayout')
@section('sidebar')
    <ul id="nav">
        <a href="/"><li id="allTab">All</li></a>
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
    <form action="{{route('art.update', $art->id)}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <label for="title">Art Title</label>
            <input type="text" name="title" value="{{$art->title}}">

        <label for="description">Description</label>
            <input type="text" name="description" value="{{$art->description}}">

        <label for="theme">Theme</label>
            <input type="text" name="theme" value="{{$art->theme}}">

        <div class="fileDiv">
            <div id="img-prev">
                <img src="{{asset('storage/art/'.$art->photo)}}" alt="Art Photo" id="img">
            </div>
            <input type="file" accept="image/*" id="choose-file" name="photo">
            <div class="fileBtn" onClick="fileup()">Choose Photo</div>
        </div>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection