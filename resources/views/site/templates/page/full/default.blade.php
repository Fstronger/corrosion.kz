@extends('site.templates.pages')

@section('content')
    <section class="company company-page bg-ellipse max-container">
        <div class="company__block container">
            @if (!empty($text))
                {!! $text !!}
            @else
                @include('site.blocks.snippets.filling')
            @endif
        </div>
    </section>
@endsection
