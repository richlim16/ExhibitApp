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
    <form action="{{route('art.store')}}"  enctype="multipart/form-data" method="post">
        @csrf
        <h1>ART FORM</h1>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <label for="title">Art Title</label>
            <input type="text" name="title" required>

        <label for="description">Description</label>
            <input type="text" name="description" required>

        <label for="theme">Theme</label>
            <input type="text" name="theme" required>

        <div class="fileDiv">
            <div id="img-prev">
                <p>No File Chosen</p>
            </div>
            <input style="display:none;" type="file" accept="image/*" id="choose-file" name="photo" required>
            <div class="fileBtn" onClick="fileup()">Choose Photo</div>
        </div>

        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
    
</div>
@endsection