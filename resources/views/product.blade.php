@extends('layouts.main')

@section('content')

<section class="product-detail {{ $product['src-h'] }}">

    <div class="navigation">
        @if ($id > 0) 
            <a href="{{ route('product', $id - 1 ) }}">&lt; PREV</a>   
        @endif

        @if ($id < $length) 
            <a href="{{ route('product', $id + 1 ) }}"> NEXT &gt;</a>   
        @endif
        
    </div>


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