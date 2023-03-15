@extends('layouts.app')

@section('content')
            <div class="container">

                <h1>Modifica un fumetto</h1>

                <div class="row g-3">
                    <div class="col mb-3">
                        <form action="{{ route("comics.update", ($comic->id)) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci titolo fumetto"
                                value="{{ $comic->title }}">

                                <label for="img" class="form-label">Immagine</label>
                                <input type="text" class="form-control" name="thumb" id="thumb" maxlength="255" placeholder="Inserisci link immagine"
                                value="{{ $comic->thumb }}">
                                

                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control" name="price" id="price" required min="0"
                                value="{{ $comic->price }}">
                                
                                <label for="series" class="form-label">Serie</label>
                                <input type="string" class="form-control" name="series" id="series" required
                                value="{{ $comic->series }}">
                                

                                <label for="sale_date" class="form-label">Data</label>
                                <input type="date" class="form-control" name="sale_date" id="sale_date" required
                                value="{{ $comic->data }}">

                                <label for="type" class="form-label">Tipo</label>
                                <input type="string" class="form-control" name="type" id="type" required
                                value="{{ $comic->type }}">


                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" id="description" rows="3"
                                value="{{ $comic->description }}"></textarea>
                            </div>

                            <div>
                                <a href="{{ route("comics.create") }}" class="btn btn-success">
                                    Inserisci
                                </a>

                            </div>
                        </form>






            </div>
@endsection