@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col text-center">

                        <div class="row">
                            @foreach ($comics as $comic)
                            <div class="card text-center">
                                <div class="card-body">
                                    <h1 class="card-title">{{ $comic->title }}</h1>
    
                                </div>
                                <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-primary">
                                    Vedi dettagli
                                </a>
                            
                            </div>
                                
                            @endforeach
                        </div>



                    </div>
                </div>
            </div>
@endsection
