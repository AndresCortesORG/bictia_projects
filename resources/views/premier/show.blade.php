@extends('layouts.app')

@section('content')
    <br><br>
    <section>
        <div class="container">
            <div class="row">
                    <div class="col-md-3">
                        <a href=""  title="{{ $movie->name }}">
                            <img src="{{ $movie->cover_page  }}" alt="" class="img-fluid mt-4" id="cover-page">
                        </a>
                    </div>
                <div class="col-md-9">
                    <br>
                    <h2 class="text-white">{{ $movie->name }}</h2>
                    <span class="text-white"><strong> Estreno {{ $movie->launching }}</strong></span>
                    <br><br>
                    <p class="text-white">{{ $movie->description }}</p>
                    <button class="btn btn-primary text-white">Reservar ahora</button>
                    <a href="{{ route('estrenos.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </section>

@endsection

