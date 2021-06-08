@extends('../pageLayout')
@section('sidebar')

@endsection
@section('content')


        <a class="tableBtn" href="{{route('exhibit.create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </a>
<table>
    <thead>
        <tr><h1>Exhibit Table</h1></tr>
        <tr>
            <th>Status</th>
            <th>Title</th>
            <th>Theme</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($exhibit as $item)

            <?php
              

              $item->startDate = date('m-d-Y', strtotime($item->startDate)); 
              $item->endDate = date('m-d-Y', strtotime($item->endDate));
            ?>

            <tr>
                <td>{{$item->status}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->theme}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->startDate}}</td>
                <td>{{$item->endDate}}</td>
                <td>
                    <form action="{{route('exhibit.edit', $item->id)}}">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                    <input class="tablerowBtn" type="submit" value="Edit">
                    </form>  
                    </br>
                    <form action="{{route('exhibit.destroy', $item->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                    <input class="tablerowBtn" type="submit" value="Delete">
                    </form>  
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection