@extends('../pageLayout')

@section('content')
    <form action="{{route('poetry.update', $poetry->id)}}" autocomplete="off" method="post">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <h1>POETRY FORM</h1>

        <label for="title">Poetry Title</label>
            <input type="text" name="title" value="{{$poetry->title}}"required>

        <label for="body">Body</label>
            <textarea style="font-size: 2vh; background-color:#2c3454; padding: 15px 20px;" name="body" cols="30" rows="10">{{$poetry->body}}</textarea>

        <label for="theme">Theme</label>
            <input type="text" name="theme" value="{{$poetry->theme}}"required>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection