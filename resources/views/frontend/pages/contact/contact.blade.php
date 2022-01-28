@extends('frontend.layouts.app')

@section('title', $title)

@section('content')
    @include('frontend.include.breadcumb')
    @include('frontend.pages.contact.sections.form')
    @include('frontend.pages.contact.sections.map')
@endsection

@push('scripts')
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="asset/frontend/js/map-active.js"></script>
@endpush