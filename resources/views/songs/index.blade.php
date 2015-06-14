@extends('master')

@section('content')
<h1>
    Justing Bieber Official Fan Club
</h1>
@foreach ($songs as $index => $song)
<li>
    <a href="/songs/{{ $index }}">{{ $song }}</a>
</li>
@endforeach
@stop
