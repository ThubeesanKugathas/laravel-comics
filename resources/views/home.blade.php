@extends('layouts.default')

@section('pageTitle', 'HOME PAGE')

{{-- main part one section --}}
@section('firstContent')
    <main>
        <div class="ms_main-one d-flex mx-auto justify-content-around flex-wrap position-relative">
            <!-- position absolute tag -->
            <div class="ms_current-series position-absolute">
                <h2>CURRENT SERIES</h2>
            </div>
    
            <!-- v-for comics cards -->
            @foreach ($data as $comic)
                <div class="ms_comics-card">
                    <div class="ms_card-image">
                        <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                    </div>
                    <p>{{ $comic["series"] }}</p>
                </div>
            @endforeach
        </div>
    
        <!-- load more button -->
        <span id="main-one-span" class="mx-auto d-table">
            <a href="#/">
                LOAD MORE
            </a>
        </span>
    </main>
@endsection

{{-- main part two section --}}
@section('secondContent')
    <div class="ms_main-two">
        <ul class="d-flex justify-content-around align-items-center mx-auto">
            <li class="d-flex align-items-center">
                <img src="{{ url('img/buy-comics-digital-comics.png') }}" alt="digital-comics">
                <p>DIGITAL COMICS</p>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ url('img/buy-comics-merchandise.png') }}" alt="merchandise">
                <p>MERCHANDISE</p>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ url('img/buy-comics-shop-locator.png') }}" alt="shop-locator">
                <p>SHOP LOCATOR</p>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ url('img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                <p>SUBSCRIPTIONS</p>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ url('img/buy-dc-power-visa.svg') }}" alt="dc-power-visa">
                <p>DC POWER VISA</p>
            </li>
        </ul>
    </div>
@endsection