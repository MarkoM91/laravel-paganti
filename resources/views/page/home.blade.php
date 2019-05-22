@extends('layout.home-layout')

@section('content')

@foreach($paganti as $pagante)
  <div class="box-container">
      <div class="box">{{ $pagante -> id }}</div>
      <div class="box">{{ $pagante -> name }}</div>
      <div class="box">{{ $pagante -> lastname }}</div>
      <div class="box">{{ $pagante -> address }}</div>
  </div>
  @endforeach


@stop
