@extends('master')
<?php foreach ($lessons as $lesson):?>
    <h2><?= $lesson;?></h2>
<?php endforeach;?>
@section('content')
    Home Page
@stop
