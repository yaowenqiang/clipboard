@extends('master')

@section('content')
<h2>Add a new song.</h2>
{!! Form::open(['route'=>'songs.store']) !!}
@include('songs.form')
{!! Form::close() !!}
@stop

