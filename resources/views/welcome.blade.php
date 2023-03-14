@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>DC COMICS</h1>

                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title"></h1>

                                <a href="{{ route("comics.index") }}">Vedi tutti i fumetti</a>

                            </div>
                        
                        </div>

                    </div>
                </div>
            </div>
@endsection
