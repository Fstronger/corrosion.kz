@extends('base')

@section('main')

    <div class="text-center" style="padding: 150px 0;">
        <h1 class="display-1 mb-5" style="color: #ce5d31;">404</h1>
        <h3>{!! trans('translations.404.title') !!}</h3>
    </div>

    @include('site.blocks.feedback')

@endsection
