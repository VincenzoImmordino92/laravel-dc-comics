@extends('layouts.main')


@section('content')

<h1>Inserisci un nuovo fumetto</h1>

<div class="row">
    <div class="col-8">
        <form action="{{ route('comics.store') }}" method="POST">
            {{-- elemnto da inserire i  tutti i form di Laravel per un conctrollo di sicurezza  --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome fumetto</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Descrizione</label>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine | Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo | Price</label>
                <input type="text" class="form-control" id="price" name="price" >
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie | Series</label>
                <input type="text" class="form-control" id="series" name="series" >
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita | Sale_date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo | Type</label>
                <input type="text" class="form-control" id="type" name="type" >
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti | Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" >
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori | Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" >
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
    </div>
</div>

@endsection
