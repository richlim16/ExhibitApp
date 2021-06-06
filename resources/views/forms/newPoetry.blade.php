@extends('../pageLayout')

@section('content')
    <form action="{{route('poetry.store')}}" method="post">
        @csrf
        <h1>POETRY FORM</h1>

        <label for="title">Poetry Title</label>
            <input type="text" name="title" required>

        <label for="body">Body</label>
            <textarea  style="font-size: 2vh; background-color:#2c3454; padding: 15px 20px;" name="body" cols="30" rows="10"></textarea>

        <label for="theme">Theme</label>
            <input type="text" name="theme" required>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection