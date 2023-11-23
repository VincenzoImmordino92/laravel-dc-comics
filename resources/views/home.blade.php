@extends('layouts.main')


@section('content')

<h1>Comics</h1>


<h1></h1>
<div class="card text-bg-dark">
    <img src="https://fumettologica.it/wp-content/uploads/2020/02/panini-dc-banner.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h2 class="card-title text-center text-bg-dark ">Benvenuti nello store di DC Comics</h2>
      <p class="card-text text-bg-dark"><small>Sono presenti : {{$num_comics}} Fumetti</small></p>
    </div>
  </div>

@endsection
