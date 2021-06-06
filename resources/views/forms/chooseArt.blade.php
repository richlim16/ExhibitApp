@extends('../pageLayout')

@section('content')

<h1>exhibit id = {{$exhibit->id}} </h1>
<form action=""></form>
@foreach ($art as $art)
    <label for=" {{$art->id}} ">{{$art->title}}</label>
    <input type="checkbox" name=" {{$art->id}} " value="">
@endforeach
@endsection