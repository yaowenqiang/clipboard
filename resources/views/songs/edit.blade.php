@extends('master')

@section('content')
<h2> {{ $song->title }}</h2>
{!! Form::open() !!}
{!! Form::close() !!}
@stop
