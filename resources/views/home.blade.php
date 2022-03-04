@extends('layouts.default')

@section('pageTitle', 'HOME PAGE')

{{-- main part one section --}}
@section('firstContent')
    @include('partials.homeFirstContent')
@endsection

{{-- main part two section --}}
@section('secondContent')
    @include('partials.homeSecondContent')
@endsection