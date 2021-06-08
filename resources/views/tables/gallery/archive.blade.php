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
        @if($item->status == 'paid')
            <?php
                if($arts->where('exhibit_id', $item->id)->first() != NULL){
                    $firstPhoto = $arts->where('exhibit_id', $item->id)->first()->photo;
                }
                else{
                    $firstPhoto = "default.jpg";
                }

                $currentDate = date('m-d-Y');
                $startDate = date('m-d-Y', strtotime($item->startDate)); 
                $endDate = date('m-d-Y', strtotime($item->endDate));
            ?>

            @if(($currentDate >= $startDate) && ($currentDate <= $endDate))
                <a href="/exhibit-{{$item->id}}">
                    <h2>{{$item->title}}</h2>
                    <div style="background-image: url({{asset('storage/art/'.$firstPhoto)}}); background-size:cover;" class="exhibit-card">
                        <div class="exhibit-details">
                            <span>Artist: </span>            <span>{{$item->user->name}}</span>
                            <span>Theme: </span>            <span>{{$item->theme}}</span>
                            <span>Description: </span>      <span>{{$item->description}}</span>
                            <span>Duration: </span>         <span><?php echo $startDate; echo " - "; echo $endDate;?></span>
                        </div>
                    </div>   
                </a>
            @endif
        @endif
    @endforeach
</div>

<div style="margin-top: 25px; text-align: center;">
                    <h2>
                        Past Exhibits
                    </h2>             
</div>

@endsection