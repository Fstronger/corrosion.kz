@extends('base')

@section('main')

    <section class="banner">
        <div class="banner__block container">
            <div class="banner__title">
                Совершенствование <br>
                системы диагностики <br>
                противокоррозионной защиты
            </div>
            <a href="/{{ app()->getLocale() }}/links/services" class="btn banner__btn">Узнать больше <img src="/site/img/icons/big-btn-arrow-white.png" alt=""></a>
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
            <div class="activities__title">Сферы деятельности</div>
            <div class="activities__gallery display_flex">
                <div class="activities__gallery-item activities__gallery-item-1">
                    <div class="activities-text">Ж/Д транспорт</div>
                </div>
                <div class="display_flex_column">
                    <div class="activities__gallery-item activities__gallery-item-2">
                        <div class="activities-text">Гражданское строительство</div>
                    </div>
                    <div class="activities__gallery-item activities__gallery-item-3">
                        <div class="activities-text">Судостроение и ремонт</div>
                    </div>
                    <div class="activities__gallery-item activities__gallery-item-4">
                        <div class="activities-text">Строительство мостов</div>
                    </div>
                </div>
                <div class="display_flex_column">
                    <div class="activities__gallery-item activities__gallery-item-5">
                        <div class="activities-text">Транспортировка нефти</div>
                    </div>
                    <div class="activities__gallery-item activities__gallery-item-6">
                        <div class="activities-text">Нефтегазовая промышленность</div>
                    </div>
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
