@extends('site.templates.pages')

@section('content')
    <section class="reviews">
        <div class="reviews__block container">
            <div class="reviews__title">Отзывы наших клиентов</div>
            <div class="reviews__slider">
                @if ($records->count() > 0)
                    @foreach($records as $record)
                        @php $cover = $record->media->first(); @endphp
                        <div class="reviews__slider-item">
                            <div class="reviews__slider-item-content">
                                <div class="reviews__slider-item-name">{{ $record->title }}</div>
                                <div class="reviews__slider-item-company">{{ $record->additionally }}</div>
                                <div class="reviews__slider-item-Position">{{ strip_tags($record->short) }}</div>
                                <div class="reviews__slider-item-review">{{ str_limit(strip_tags($record->full), 500) }}</div>
                                <a href="{{ $record->url }}" class="reviews__slider-item-btn">Читать полностью <span>→</span></a>
                            </div>
                            <div class="reviews__slider-item-content">
                                @if (!is_null($cover))
                                    <img src="/{{ $cover->link }}" alt="{{ $record->title }}">
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    @include('site.blocks.snippets.filling')
                @endif
            </div>
        </div>
    </section>
@endsection







