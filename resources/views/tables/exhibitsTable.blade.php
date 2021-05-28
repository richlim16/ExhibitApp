@extends('../pageLayout')
@section('sidebar')

@endsection
@section('content')


<a href=" {{route('exhibit.create')}} ">Create Exhibit</a>

<table>
    <thead>
        <tr><h1>Exhibit Table</h1></tr>
        <tr>
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
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->theme}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->startDate}}</td>
                <td>{{$item->endDate}}</td>
                <td>
                    <a href=" {{route('exhibit.edit', $item->id)}} ">Edit</a>
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