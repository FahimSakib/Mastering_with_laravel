@extends('frontend.layouts.app')

@section('title', $title)

@section('content')
    @include('frontend.include.breadcumb')
    @include('frontend.include.search')
    @include('frontend.pages.properties.sections.listing')
@endsection
