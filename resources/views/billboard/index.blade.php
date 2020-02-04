@extends('layouts.app')

@section('content')

    <section><br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://pmd205533tn-a.akamaihd.net/eSalt_Media/842/1011/Banner-05-1900x400.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://pmd205533tn-a.akamaihd.net/eSalt_Media/842/1011/Banner-03-1900x400.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://pmd205533tn-a.akamaihd.net/eSalt_Media/843/487/Banner-12-1900x400.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <div class="container">
            <h2 class="text-white">Cartelera</h2>
            <div class="row">
                @foreach($billboards as $billboard)
                    <div class="col-md-2">
                        <a href="{{ route('estrenos.show',$billboard->movie_id) }}"  title="{{ $billboard->name }}">
                            <img src="{{ $billboard->cover_page  }}" alt="" class="img-fluid mt-4" id="cover-page">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

