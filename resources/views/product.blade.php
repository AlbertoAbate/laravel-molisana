@extends('layouts.main')

@section('content')

<section class="product-detail">
    <div class="hero">
        <h1>{{ $product['titolo'] }}</h1>
        <img class="images" src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
        <img class="images" src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
        <p>{!! $product['descrizione'] !!}</p>
    </div>
    <div class="description">

    </div>
</section>

@endsection