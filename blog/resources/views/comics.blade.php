@extends('layouts.main')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="cards">
                @foreach ($cards ?? '' as $card)
                    <div class="card">
                        <div class="image">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                        </div>
                        <h3>{{ $card['series'] }}</h3>
                    </div>
                @endforeach
            </div>
            <div class="btn-more">
                <button class="more">Load More</button>
            </div>
        </div>
    </section>
@endsection    