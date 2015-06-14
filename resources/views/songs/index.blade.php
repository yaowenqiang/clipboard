@extends('master')

@section('content')
@foreach ($songs as $song)
<li>
    <a href="/songs/{{ $song->slug }}">{{ $song->title }}</a>
    <a href="{{ route('song_path',$song->slug) }}">{{ $song->title }}</a>
{!! link_to_route('song_path',$song->title,[$song->slug]) !!}
</li>
@endforeach
@stop
