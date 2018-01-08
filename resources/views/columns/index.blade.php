@extends('layouts.master')

@section('content')
    <div class="row">
        This is the columns page
    </div>
    <div class="row">
      <a href='{{ route('column.year', ['year' => 2002]) }}'>2002</a>
    </div>
    <br>
    @foreach($columns as $column)
      <div class="row">
        <div class="col s12">
          <a href='{{ route('column.id', ['id' => $column->id]) }}'>{{$column->headline}}</span>
        </div>
      </div>
    @endforeach
@endsection
