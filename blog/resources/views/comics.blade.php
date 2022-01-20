@extends('layouts.main')

@section('Head DC comics', 'Products | DC comics')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="cards">
                @foreach ($cards as $index => $card)
                    <div class="card">
                        <a href="{{ route('comic-detail', ['id' => $index]) }}">
                            <div class="image">
                                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                            </div>
                            <h3>{{ $card['series'] }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="btn-more">
                <button class="more">Load More</button>
            </div>
        </div>
    </section>
@endsection    