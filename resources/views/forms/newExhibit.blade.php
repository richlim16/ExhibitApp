@extends('../pageLayout')

@section('content')

    <form action=" {{route('exhibit.store')}} " method="post">
        @csrf
        <h1>EXHIBIT FORM</h1>
        <label for="startDate">Starting Date</label>
            <input type="date" name="startDate" required>

        <label for="endDate">Ending Date</label>
            <input type="date" name="endDate" required>

        <label for="title">Exhibit Title</label>
            <input type="text" name="title">

        <label for="theme">Theme</label>
            <input type="text" name="theme" required>

        <label for="description">Description</label>
            <textarea name="description" style="background-color: #2c3454;" cols="30" rows="5"></textarea>
        <button id="submitBtn"><h3>SUBMIT</h3></button>
    </form>
@endsection