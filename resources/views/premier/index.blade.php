@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <h2 class="text-white">Estrenos</h2>
              <div class="row">
                  @foreach($premieres as $premier)
                  <div class="col-md-2">
                      <a href="{{ route('estrenos.show',$premier->premier_id) }}"  title="{{ $premier->name }}">
                      <img src="{{ $premier->cover_page  }}" alt="" class="img-fluid mt-4" id="cover-page">
                      </a>
                  </div>
                      @endforeach
              </div>
        </div>
    </section>

@endsection

