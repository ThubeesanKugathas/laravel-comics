@extends('layouts.default')


@section('pageTitle', 'HOME PAGE')

@section('firstContent')
    <div class="ms_container">
        <!-- position absolute tag -->
        <div class="ms_current-series">
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
    <span>
        <a href="#/">
            LOAD MORE
        </a>
    </span>
@endsection

@section('secondContent')
    <div class="ms_ft-top">
        <ul>
            <li>
                <img src="{{ url('img/buy-comics-digital-comics.png') }}" alt="digital-comics">
                <p>DIGITAL COMICS</p>
            </li>
            <li>
                <img src="{{ url('img/buy-comics-merchandise.png') }}" alt="merchandise">
                <p>MERCHANDISE</p>
            </li>
            <li>
                <img src="{{ url('img/buy-comics-shop-locator.png') }}" alt="shop-locator">
                <p>SHOP LOCATOR</p>
            </li>
            <li>
                <img src="{{ url('img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                <p>SUBSCRIPTIONS</p>
            </li>
            <li>
                <img src="{{ url('img/buy-dc-power-visa.svg') }}" alt="dc-power-visa">
                <p>DC POWER VISA</p>
            </li>
        </ul>
    </div>
@endsection