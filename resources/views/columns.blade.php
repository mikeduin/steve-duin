@extends('layouts.master')

@section('content')
    <div class="">
        This is the columns page
    </div>
    <br>
    @foreach($columns as $column)
      <div class="row">
        <div class="col s8">
          <span>{{$column['headline']}}</span>
        </div>
      </div>
    @endforeach
@endsection
