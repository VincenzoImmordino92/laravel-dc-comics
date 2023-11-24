@extends('layouts.main')


@section('content')

<h1>Comics Everyone</h1>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($newComics as $comic)
      <tr>
        <td>{{$comic->id}}</td>
        <td>{{$comic->title}}</td>
        <td>{{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td><a href="{{route('comics.show',$comic)}}" class="btn btn-success"><i class="fa-solid fa-arrow-right"></i></a>
        <a href="{{route('comics.edit',$comic)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
        @include('partials.comicDelete')
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $newComics->links() }}




{{-- <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
    <div class="col-md-4">
        <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
    </div>
    <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->price}}&euro;</p>
        <p class="card-text">{{$comic->type}}</p>
        <p class="card-text"><small class="text-body-secondary">{{$comic->sale_date}}</small></p>
        </div>
    </div>
    </div>
</div> --}}


@endsection
