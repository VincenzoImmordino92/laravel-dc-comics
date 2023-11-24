@extends('layouts.main')


@section('content')

<h1>{{$comic->title}}</h1>
<a href="{{route('home')}}" class="btn btn-outline-secondary my-3">Torna alla Home</a>
<a href="{{route('comics.index')}}" class="btn btn-outline-secondary my-3">Torna alla pagina precedente</a>
<a href="{{route('comics.edit',$comic)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>
@include('partials.comicDelete')

  </div>
  <div class="card mb-3">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p class="card-text">{{$comic->description}}.</p>
      <p class="card-text">{{$comic->price}}.</p>
      <p class="card-text">{{$comic->series}}.</p>
      <p class="card-text">{{$comic->type}}.</p>
      <p class="card-text">{{$comic->artists}}.</p>
      <p class="card-text">{{$comic->writers}}.</p>
      <p class="card-text"><small class="text-body-secondary">{{$comic->sale_date}}</small></p>
    </div>
  </div>



@endsection
