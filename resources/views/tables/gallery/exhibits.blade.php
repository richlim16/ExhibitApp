@extends('../gallery')


@section('content')
@guest
    @if (Route::has('login'))
        
    @endif
    @else
        <script>window.location = "/home";</script>
@endguest
<div class="exhibit-grid">
    @foreach ($exhibits as $item)
        <a href="/exhibit-{{$item->id}}">
            <div class="exhibit-card">
                <div class="exhibit-details">
                    <span>Title: </span>            <span>{{$item->title}}</span>
                    <span>Artist: </span>            <span>{{$item->user->name}}</span>
                    <span>Theme: </span>            <span>{{$item->theme}}</span>
                    <span>Description: </span>      <span>{{$item->description}}</span>
                    <span>Duration: </span>         <span><?php echo date('m-d-Y', strtotime($item->startDate)); echo " - "; echo date('m-d-Y', strtotime($item->endDate));?></span>
                </div>
            </div>
        </a>
    @endforeach
</div>

@endsection