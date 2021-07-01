@extends('site.templates.pages')

@section('content')
    <section class="news-page">
        <div class="news-page__block container">
            <div class="news-page__title">{{ $section->name }}</div>
            <div class="news-page__items">
                @if ($records->count() > 0)
                    @foreach($records as $record)
                        @php $cover = $record->media->first(); @endphp

                        <div class="news-page__item">
                            @if (!is_null($cover))
                                <img src="/{{ $cover->link }}" alt="{{ $record->title }}" class="news-page__item-img">
                            @endif
                            <span class="news-page__item-data">{{ date('d.m.Y', strtotime($record->published_at)) }}</span>
                                <a href="{{ $record->url }}"><h3 class="news-page__item-title">{{ $record->title }}</h3></a>
                            <p class="news-page__item-text">{!! $record->short !!}</p>
                          </div>
                    @endforeach

                @else
                    @include('site.blocks.snippets.filling')
                @endif
            </div>
        </div>
    </section>
@endsection
