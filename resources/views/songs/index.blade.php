@extends('master')

@section('content')
<h1>
    Justing Bieber Official Fan Club
</h1>
@foreach ($songs as $song)
<li>
    {{ $song }}
</li>
@endforeach
@stop
