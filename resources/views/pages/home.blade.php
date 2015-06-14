@extends('master')
<?php foreach ($lessons as $lesson):?>
    <h2><?= $lesson;?></h2>
<?php endforeach;?>
<h1>
{{ $name }}
</h1>
@section('content')
    Home Page
@stop
