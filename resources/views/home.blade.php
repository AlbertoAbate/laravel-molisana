@extends('layouts.main')

@section('content')

<section>
    <div class="cards">
        @foreach ($cards as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <a href="">Vedi prodotto</a>
        </div>
            
        @endforeach
    </div>
</section>

@endsection
