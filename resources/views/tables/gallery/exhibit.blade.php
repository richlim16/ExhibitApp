@extends('../gallery')


@section('content')
<div>
</div>

<div class="tab">
  <button class="tablinks active" onclick="openCategory(event, 'Arts')">Arts</button>
  <button class="tablinks" onclick="openCategory(event, 'Poetry')">Poetries</button>
  <button class="tablinks" onclick="openCategory(event, 'Music')">Music</button>
</div>

<div id="Arts" style="display:block" class="tabcontent">
    <div class="cards-table">
        @if($poetry->isEmpty())
            <h2>there are no arts in this exhibit</h2>
        @else
            @foreach ($art as $art)

                <?php 
                    $userName = $user->find($art['user_id']);

                ?>
                <div class="card">
                    <div class="title">
                        "{{$art['title']}}"
                    </div>
                    <img src="{{asset('storage/art/'.$art->photo)}}" onclick="onClick(this)" alt="&ldquo;{{$art['title']}}&rdquo; by {{$userName['name']}}" style="width:100%" id="img">
                    <div>
                        <div class="theme-title">
                            {{$art['theme']}}
                        </div>  
                        <hr>  
                    </div>


                    <div style="padding: 0 10px;">
                        <div class="description">
                            {{$art['description']}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<div id="Poetry" style="display:none"  class="tabcontent">
    <div class="cards-table">
        @if($poetry->isEmpty())
            <h2>there are no poetries in this exhibit</h2>

        @else
            @foreach($poetry as $poetry)
                <div class="poetry-card">
                    <div class="title">
                        "{{$poetry['title']}}"
                    </div>
                    
                    <div style="background-color: #1e3c86; overflow-y:scroll; padding: 15px 25px">
                        {{$poetry['body']}}
                    </div>

                    <div> 
                        <div class="theme-title">
                            {{$poetry['theme']}}
                        </div>  
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<div id="Music" style="display:none"  class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>



<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <div class="modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
  <div id="caption"></div>
</div>




<script>
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("caption").innerHTML = element.alt;
    document.getElementById("modal01").style.display = "block";
    }

    function openCategory(evt, category) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(category).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection