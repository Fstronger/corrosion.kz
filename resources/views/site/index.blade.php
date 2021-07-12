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

    <div id="modal-application-toggle" class="modal ">
        <div class="modal__background">
            <div class="modal__block animate__animated animate__bounce">
                <form action="" class="contacts__form">
                    <div class="contacts__form-close"><img id="closs-modal-application" src="/site/img/icons/close-2.png" alt=""></div>
                    <div class="contacts__form-title">Есть вопросы?</div>
                    <div class="contacts__form-text">
                        Оставьте заявку на консультацию и наши специалисты <br>
                        ответят на интересующие Вас вопросы
                    </div>
                    <input type="text" placeholder="ФИО*">
                    <input type="text" placeholder="Номер телефона*">
                    <input type="text" placeholder="Название организации">
                    <input type="submit" value="Онлайн заявка" id="modal-thanks" class="btn contacts__form-btn">
                </form>
            </div>
        </div>
    </div>

    <div id="modal-thanks-toggle" class="modal ">
        <div class="modal__background">
            <div class="modal__block animate__animated animate__bounce">
                <div class="contacts__form-close"><img id="closs-modal-thanks" src="/site/img/icons/close-2.png" alt=""></div>
                <div class="modal__thanks">
                    <img src="/site/img/logo.png" class="modal__thanks-img" alt="">
                    <div class="modal__thanks-title">Спасибо за Вашу заявку!</div>
                    <div class="modal__thanks-text">Наши специалист свяжется с Вами в ближайшее время</div>
                </div>
            </div>
        </div>
    </div>

@endsection
