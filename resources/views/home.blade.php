@extends('layouts.default')

@section('pageTitle', 'HOME PAGE')

{{-- main part one content --}}
@section('mainContent')
    @include('partials.homeFirstContent')
{{-- main part two content --}}
    @include('partials.homeSecondContent')
@endsection