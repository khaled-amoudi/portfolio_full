@extends('frontend.layouts.main')

@section('main')

    @include('frontend.partials.cursor')
    @include('frontend.partials.preloader')
    @include('frontend.partials.side_bar')
    @include('frontend.partials.side_bar_mobile')


    @include('frontend.partials.main_page')


    @include('frontend.partials.about_page')


    @include('frontend.partials.portfolio_page')


    @include('frontend.partials.contact_page')
@endsection
