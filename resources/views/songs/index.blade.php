@extends('master')

@section('content')
@foreach ($songs as $song)
<li>
    <a href="/songs/{{ $song->slug }}">{{ $song->title }}</a>
    <a href="{{ route('songs.show',$song->slug) }}">{{ $song->title }}</a>
{!! link_to_route('songs.show',$song->title,[$song->slug]) !!}
</li>
@endforeach
@stop
