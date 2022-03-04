@extends('layouts.default')

@section('pageTitle', 'HOME PAGE')

{{-- main part one section --}}
@section('mainContent')
    @include('partials.homeFirstContent')
{{-- main part two section --}}
    @include('partials.homeSecondContent')
@endsection