@extends('layout')

@section('content')

    <h1>DC Comics</h1>
    <div class="d-flex position-relative">
        @foreach($comics as $comic)
           
                <img src="{{ $comic['thumb']}}" class="flex-shrink-0 me-3" alt="cover">
                <div>
                  <h5 class="mt-0">{{ $comic['title'] }}</h5>
                  <p>{{ $comic['description'] }}</p>
                  <p>Prezzo: {{ $comic['price'] }}</p>
                  {{-- <a href="#" class="stretched-link">Go somewhere</a> --}}
                </div>
        @endforeach
    </div>
@endsection
