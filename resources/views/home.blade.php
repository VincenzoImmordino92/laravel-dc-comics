@extends('layouts.main')


@section('content')

<h1>Comics</h1>


<div class="card mb-3">
    <img src="{{$comics[0]->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$comics[0]->title}}</h5>
      <p class="card-text">{{$comics[0]->artists}}</p>
      <p class="card-text"><small class="text-body-secondary">{{$comics[0]->sale_date}}</small></p>
    </div>
  </div>


@endsection
