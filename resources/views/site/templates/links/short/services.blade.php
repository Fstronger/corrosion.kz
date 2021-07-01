@extends('site.templates.pages')

@section('content')
    @if (count($records) > 0)
        <section class="services-page">
            <div class="services-page__block container">
                <div class="services-page__title">{{ $section->name }}</div>
                <div class="services-page__content">
                    <div class="services-page__items">
                        @foreach($records as $record)
                            <div class="services-page__item">
                                <img src="/{{ $record->photo }}" alt="">
                                {{ $record->title }}
                            </div>
                        @endforeach
                    </div>
                    <div class="services-page__img">
                        <img src="/site/img/services-page-img.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
