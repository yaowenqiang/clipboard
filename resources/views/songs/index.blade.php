@extends('master')

@section('content')
<h1>
    Justing Bieber Official Fan Club
</h1>
@foreach ($songs as $song)
<li>
    <a href="/songs/{{ $song->id }}">{{ $song->title }}</a>
</li>
@endforeach
@stop
