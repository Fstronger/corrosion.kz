@extends('site.templates.pages')

@section('content')
    <section class="news-page">
        <div class="news-page__block container">
            <div class="news-page__items">
                <div class="news-page__item">
                    @php $cover = $data->media->first(); @endphp
                    @if (!is_null($cover))
                        <img src="/{{ $cover->link }}"
                             alt="{{ $data->title }}"
                             class="news-page__item-img"
                             style="width: auto; height: auto;">
                    @endif
                    <span class="news-page__item-data">{{ date('d.m.Y', strtotime($data->published_at)) }}</span>
                    <h3 class="news-page__item-title">{{ $data->title }}</h3>
                    <h3 class="news-page__item-title">{{ $data->additionally }}</h3>
                    @if ($data->short || $data->full)
                        <p class="news-page__item-text">{!! $data->short !!}</p>
                        <p class="news-page__item-text">{!! $data->full !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
