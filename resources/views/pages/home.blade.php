@extends('master')
<?php foreach ($lessons as $lesson):?>
    <h2><?= $lesson;?></h2>
<?php endforeach;?>
<h1>
{{ $name }}
<br>
{{ $name2 }}
<br>
{!! $name2 !!}
</h1>
@section('content')
    Home Page
@stop
