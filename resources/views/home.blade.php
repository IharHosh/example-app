@extends('layout')

@section('content')

<body>
    <form action="{{route('user.posts.store')}}" method="post">
        @csrf
        <input name="Title">
        <button type="submit">On</button>
    </form>
    <br>
     <table class="table table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th colspan="2">Hello</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
        </table>

</body>
@endsection
