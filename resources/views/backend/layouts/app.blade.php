<!doctype html>
<html lang="en" class="loading loading-primary">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta name="description" content="dashboard, admin, template, templates, peak, ui, material design">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('backend.include.styles')
</head>

<body id="dashboards-analytics" data-layout="default-sidebar-1" data-sidebar="primary" data-navbar="primary"
    data-controller="dashboards" data-view="analytics">
    <div id="fakeloader"></div>
    @include('backend.include.header')
    @include('backend.include.jumbotron')

    <div class="container-fluid">
        <div class="row">
            <!-- left sidebar -->
            @include('backend.include.left-sidebar')
            <!-- left sidebar -->
            <!-- right sidebar -->
            @include('backend.include.right-sidebar')
            <!-- right sidebar -->
            @yield('content')
        </div>
    </div>

    @include('backend.include.scripts')

    <div class="right-sidebar-backdrop"></div>
</body>

</html>
