@extends('layouts.app')
@section('main-content')
<h1>
    I miei film preferiti del 1900
</h1>
        @foreach ($movies as $movie )
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Titolo: 
                    {{ $movie['title'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    @if ($movie['title'] != $movie['original_title'])
                    <strong>Titolo Originale:</strong> {{ $movie['original_title'] }}
                    @endif
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">
                    Nazionalità:
                    {{ $movie['nationality'] }}
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">
                    Anno uscita:
                    {{ $movie['date'] }}
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">
                    Media voto:
                    {{ $movie['vote'] }}
                </h6>
            </div>
          </div>
    @endforeach
@endsection