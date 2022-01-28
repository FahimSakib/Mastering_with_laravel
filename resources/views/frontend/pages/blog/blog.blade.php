@extends('frontend.layouts.app')

@section('title', $title)

@section('content')
    @include('frontend.include.breadcumb')
    @include('frontend.pages.blog.sections.post')
@endsection
