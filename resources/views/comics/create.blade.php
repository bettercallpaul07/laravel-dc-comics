@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
                <h1>Aggiungi un nuovo fumetto</h1>

                <div class="row g-3">
                    <div class="col mb-3">
                        <form action="{{ route("comics.store") }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci titolo fumetto">

                                <label for="img" class="form-label">Immagine</label>
                                <input type="text" class="form-control" name="thumb" id="thumb" maxlength="255" placeholder="Inserisci link immagine">

                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control" name="price" id="price" required min="0">
                                
                                <label for="series" class="form-label">Serie</label>
                                <input type="string" class="form-control" name="series" id="series" required>

                                <label for="sale_date" class="form-label">Data</label>
                                <input type="date" class="form-control" name="sale_date" id="sale_date" required>

                                <label for="type" class="form-label">Tipo</label>
                                <input type="string" class="form-control" name="type" id="type" required>


                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>

                            <div>
                                <a href="{{ route("comics.create") }}" class="btn btn-success">
                                    Inserisci
                                </a>

                            </div>
                        </form>
                    </div>

                </div>


            </div>
@endsection