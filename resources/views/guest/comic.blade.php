@extends('guest.templates.base')

@section('title', 'Comic')

@section('content')
<main>
    <div class="container">
        <div class="top-content">
            <h2>{{$comic[0]['title']}}</h2>
            <img src="{{ $comic[0]['thumb'] }}" alt="">
            <div>
                <div>{{ $comic[0]['price'] }}</div>
                <div>AVAIABLE</div>
                <div>Check Avaiability</div>
            </div>
            <p>{{ $comic[0]['description'] }}</p>
            <img src="{{ asset('images/adv.jpg') }}" alt="">
        </div>

        <div class="bot-content">
            <div class="talent">
                <h3>Talent</h3>
                <div class="artists">
                    <h4>Art By</h4>
                    @foreach ($comic[0]['artists'] as $artist)
                        <a href="">
                            {{ $artist }}
                        </a>
                    @endforeach

                    <h4>Written By</h4>
                    @foreach ($comic[0]['writers'] as $writer)
                        <a href="">
                            {{ $writer }}
                        </a>
                    @endforeach
                </div>

            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div>{{ $comic[0]['series'] }}</div>
                <div>{{ $comic[0]['price'] }}</div>
                <div>{{ $comic[0]['sale_date'] }}</div>
            </div>
        </div>
    </div>
</main>
    <div></div>
@endsection
