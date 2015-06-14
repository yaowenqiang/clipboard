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
@foreach ($lessons as $lesson)
    <h2>{{ $lesson }}</h2>
@endforeach
@section('content')
    Home Page
@stop
@if (1 + 1 == 2)
1 + 1 = 2
@endif

@unless (1 + 1 == 2)
1 + 1 = 2
@endunless
