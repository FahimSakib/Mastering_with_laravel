@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
    @include('frontend.pages.home.sections.slider')
    @include('frontend.include.search')
    @include('frontend.pages.home.sections.featured-properties')
    @include('frontend.pages.home.sections.action')
    @include('frontend.pages.home.sections.testimonials')
    @include('frontend.pages.home.sections.editor')
@endsection









