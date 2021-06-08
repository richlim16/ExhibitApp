@extends('../pagelayout')


@section('content')
<div style="margin: 0 0 20px 0; text-align: center;">
                    <h2>
                        On-going Exhibits
                    </h2>             
</div>

<div class="exhibit-grid">
    @foreach ($exhibits as $item)
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
                    status: 
                    @if($item->status == 'paid')
                        <span style="color: #0fc963;">PAID</span>
                    @else
                    <span style="color: #ee0a15;">PENDING</span>
                    @endif
                </a>
                
            @endif
    @endforeach
</div>

<div style="margin: 100px 0 20px 0; text-align: center;">
                    <h2>
                        Future Exhibits
                    </h2>             
</div>

<div class="exhibit-grid">
    @foreach ($exhibits as $item)
    
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

            @if(($currentDate <= $startDate))
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
                    status: 
                    @if($item->status == 'paid')
                        <span style="color: #0fc963;">PAID</span>
                    @else
                    <span style="color: #ee0a15;">PENDING</span>
                    @endif  
                </a>
            @endif
    @endforeach
</div>

<div style="margin: 100px 0 20px 0; text-align: center;">
                    <h2>
                        Past Exhibits
                    </h2>             
</div>

<div class="exhibit-grid">
    @foreach ($exhibits as $item)

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

        @if(($currentDate >= $endDate))
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
                status: 
                    @if($item->status == 'paid')
                        <span style="color: #0fc963;">PAID</span>
                    @else
                    <span style="color: #ee0a15;">PENDING</span>
                    @endif
            </a>
        @endif

    @endforeach
</div>

@endsection