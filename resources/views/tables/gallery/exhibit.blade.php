@extends('../gallery')


@section('content')

@guest
    @if (Route::has('login'))

    @endif
    @else
        <a href="/home">go back</a>
@endguest

<h1>{{$exhibit['title']}}</h1>


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
                    <img src="{{asset('storage/art/'.$art->photo)}}" onclick="onClickImg(this)" alt="&ldquo;{{$art['title']}}&rdquo; by {{$userName['name']}}" style="width:100%" id="img">
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

                <?php 
                    $userName = $user->find($poetry['user_id']);
                ?>

                <div class="poetry-card">
                    <div class="title">
                        "{{$poetry['title']}}"
                    </div>
                    
                    <div onclick="onClickPoetry(this, '<?php echo $poetry->title?>', '<?php echo $poetry->theme?>', '<?php echo $userName->name?>')" id="poetry_body" style="background-color: #1e3c86; overflow-y:scroll; padding: 15px 25px">
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

<div id="modal02" class="w3-modal" onclick="this.style.display='none'">
    <div class="modal-content w3-animate-zoom">
        <h2 id="poetry-title"></h2>
        <h3 id="poetry-theme"></h2>
        <h4 id="poetry-user"></h4>
        <hr style="margin-top: 10px;">
        <div id="poetry-text"></div>
    </div>
</div>


<script>
    function onClickImg(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("caption").innerHTML = element.alt;
        document.getElementById("modal01").style.display = "block";
    }

    function onClickPoetry(element, title, theme, username) {
        string = element.innerHTML;
        newstr = string.substr(25)
        document.getElementById("poetry-text").innerHTML = newstr;
        document.getElementById("poetry-title").innerHTML = title;
        document.getElementById("poetry-theme").innerHTML = theme;
        document.getElementById("poetry-user").innerHTML = "by " + username;
        document.getElementById("modal02").style.display = "block";
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