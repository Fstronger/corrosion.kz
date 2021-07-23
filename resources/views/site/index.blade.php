@extends('base')

@section('main')

    <section class="banner">
        <div class="banner__block container">
            <div class="banner__title">
                {!! __('translations.banner') !!}
            </div>
            <a href="/{{ app()->getLocale() }}/links/services" class="btn banner__btn">{!! __('translations.banner_btn') !!} <img src="/site/img/icons/big-btn-arrow-white.png" alt=""></a>
            <div class="banner__slider">
                {!! getLinks('services-col', null, true) !!}
            </div>
        </div>
    </section>


    <section class="company bg-ellipse-main max-container">
        {!! getPage('company-block') !!}
    </section>


    <section class="activities">
        <div class="activities__block container">
            <div class="activities__title">{!! __('translations.activities.title') !!}</div>
            <div class="activities__gallery display_flex">
                <a href="/{{ app()->getLocale() }}/page/railway-transport">
                    <div class="activities__gallery-item activities__gallery-item-1">
                        <div class="activities-text">{!! __('translations.activities.item1') !!}</div>
                    </div>
                </a>
                <div class="display_flex_column">
                    <a href="/{{ app()->getLocale() }}/page/grazhdanskoe-stroitelstvo">
                        <div class="activities__gallery-item activities__gallery-item-2">
                            <div class="activities-text">{!! __('translations.activities.item2') !!}</div>
                        </div>
                    </a>
                    <a href="/{{ app()->getLocale() }}/page/sudostroenie-i-remont">
                        <div class="activities__gallery-item activities__gallery-item-3">
                            <div class="activities-text">{!! __('translations.activities.item3') !!}</div>
                        </div>
                    </a>
                    <a href="/{{ app()->getLocale() }}/page/stroitelstvo-mostov">
                        <div class="activities__gallery-item activities__gallery-item-4">
                            <div class="activities-text">{!! __('translations.activities.item4') !!}</div>
                        </div>
                    </a>
                </div>
                <div class="display_flex_column">
                    <a href="/{{ app()->getLocale() }}/page/transportirovka-nefti">
                        <div class="activities__gallery-item activities__gallery-item-5">
                            <div class="activities-text">{!! __('translations.activities.item5') !!}</div>
                        </div>
                    </a>
                    <a href="/{{ app()->getLocale() }}/page/neftegazovaya-promyshlennost">
                        <div class="activities__gallery-item activities__gallery-item-6">
                            <div class="activities-text">{!! __('translations.activities.item6') !!}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {!! getLinks('clients-block', null, true) !!}


    {!! getLinks('nam-doveryayut-block', null, true) !!}


    <section class="news">
        {!! getNews('news') !!}
    </section>

    @include('site.blocks.feedback')

@endsection
