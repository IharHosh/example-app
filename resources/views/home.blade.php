@extends('layout')

@section('content')

<body>
    <form action="{{route('user.posts.store')}}" method="post">
        @csrf
        <label>
            <input name="Title">
        </label>
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
        <p>Hello!</p>
        </tbody>
        </table>

{{-- выведем данные из params на страничке для демонстрации данного класса --}}
@php
    $p= \App\SBlog\Core\BlogApp::get_instance()->getProperty('login');
    dd($p);
@endphp

</body>
@endsection
