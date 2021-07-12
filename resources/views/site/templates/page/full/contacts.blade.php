@extends('site.templates.pages')

@section('content')
    <section class="contacts">
        <div class="contacts__block container">
            <div class="contacts__title">Наши контакты</div>
            <div class="contacts__content">
                <div class="contacts__info">
                    {!! getLinks('contacts-block') !!}
                    <form action="" class="contacts__form">
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
                <div class="contacts__maps">
                    {!! $text !!}
                </div>
            </div>
        </div>
    </section>
@endsection
