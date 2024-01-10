@extends('layout')

@section('content')

    {{-- <h1>DC Comics</h1>
    <div class="d-flex position-relative">
        @foreach($comics as $comic)
           
                <img src="{{ $comic['thumb']}}" class="flex-shrink-0 me-3" alt="cover">
                <div>
                  <h5 class="mt-0">{{ $comic['title'] }}</h5>
                  <p>{{ $comic['description'] }}</p>
                  <p>Prezzo: {{ $comic['price'] }}</p>
               
                </div>
        @endforeach 
    </div>
    --}}
    <div class="container d-flex flex-wrap justify-content-between">
        @foreach($comics as $comic)
        <div class="card mb-3" style="width: 18rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="cover">
            <div class="card-body">
                <h5 class="card-title">{{ $comic['title'] }}</h5>
                <!-- Nascondi i dettagli inizialmente -->
                <p class="card-text description">{{ $comic['description'] }}</p>
                <p class="card-text price">Prezzo: {{ $comic['price'] }}</p>
                <!-- Utilizza una classe nascosta per i dettagli -->
                <a href="#" class="btn btn-primary details">Dettagli</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
