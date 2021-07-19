@extends('base')

@section('main')

    @include('site.blocks.section.breadcrumbs')
    @yield('content')

    @include('site.blocks.feedback')

@endsection
