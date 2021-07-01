@extends('site.templates.pages')

@section('content')
    @component('site.component.page-head')
        @include('site.blocks.title')
    @endcomponent

    @component('site.component.page-content')
        <div class="sitemap">
            @include('site.blocks.sitemap', ['structures' => $structures, 'ulClass' => ''])
        </div><!-- /.sitemap -->
    @endcomponent

    @component('site.component.sidebar')@endcomponent
@endsection
