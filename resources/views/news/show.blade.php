@extends('main')
@section('content')
    <div style="border: 1px solid teal;">
        <h2> {{ $news['column'] }} </h2>
        <p> {{ $news['author'] }}</p>
    </div>
@endsection