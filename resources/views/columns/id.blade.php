@extends('layouts.master')

@section('content')
  <div class="row">
    <h2>{{$column->headline}}</h2>
    <p>{{$column->date}}</p>
    <p>{{$column->body}}</p>
  </div>
@endsection
