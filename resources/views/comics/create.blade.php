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
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-success">
                                    Salva
                                </button>

                            </div>
                        </form>
                    </div>

                </div>


            </div>
@endsection