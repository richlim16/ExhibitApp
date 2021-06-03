@extends('../gallery')


@section('content')

@foreach ($exhibits as $item)
<div>
    <div>{{$item->title}}</div>
    <div>{{$item->theme}}</div>
    <div>{{$item->startDate}}</div>
    <div>{{$item->endDate}}</div>
    <form action="/exhibit-{{$item->id}}">
        <button>view</button>
    </form>  
</div>

@endforeach


@endsection