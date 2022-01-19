@extends('layouts.main')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="cards">
                @foreach ($cards ?? '' as $card)
                    <div class="card">
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                        <h3>{{ $card['series'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection    