@extends('layout.home-layout')

@section('content')
<a href="{{ route('home') }}"><i class="fas fa-home"></i></a>

@foreach($paganti as $pagante)
  <div class="box-container">
      <div class="box line_height">{{ $pagante -> id }}</div>
      <div class="box line_height">{{ $pagante -> name }}</div>
      <div class="box line_height">{{ $pagante -> lastname }}</div>
      <div class="box">{{ $pagante -> address }}</div>
  </div>
  @endforeach


@stop
