@extends('layouts.main')

@section('main-content')
    <section class="image-detail">
        {{-- <img src="../images/jumbotron.jpg" alt=""> --}}
    </section>
    <section class="container">
        <div class="detail">
            <h1>{{ $comic['title'] }}</h1>
            <div>
                <div class="check">
                    <div class="price">
                        U.S Price: {{ $comic['price'] }}
                        <span class="available">Available</span>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"> Dropdown </button>
                        <div class="dropdown-content">
                            <a href="#"> Link 1 </a>
                            <a href="#"> Link 2 </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text">
                {{ $comic['description'] }}
            </div>
            <figure>
                <img src="../images/adv.jpg" alt="">
            </figure>
        </div>
        
    </section>
@endsection 