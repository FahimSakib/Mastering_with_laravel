@extends('frontend.layouts.app')

@section('title', $title)

@section('content')
    @include('frontend.include.breadcumb')
    @include('frontend.include.search')
    @include('frontend.pages.about.sections.about-content')
    @include('frontend.include.action')
    @include('frontend.pages.about.sections.team')
@endsection

