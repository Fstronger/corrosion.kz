@extends('site.templates.pages')

@section('content')
    <section class="contacts">
        <div class="contacts__block container" id="contacts__block">
            <div class="contacts__title">{!! __('form.feedback.contacts') !!}</div>
            <div class="contacts__content">
                <div class="contacts__info">
                    {!! getLinks('contacts-block') !!}
                    <form action="" class="contacts__form">
                        <div class="contacts__form-title">{!! __('form.feedback.title') !!}</div>
                        <div class="contacts__form-text">
                            {!! __('form.feedback.desc') !!}
                        </div>
                        <input type="text" id="name" name="name" placeholder="{!! __('form.feedback.fio') !!}">
                        <input type="text" id="phone" name="phone" placeholder="{!! __('form.feedback.phone') !!}">
                        <input type="text" id="organization" name="organization" placeholder="{!! __('form.feedback.organization') !!}">
                        <div id="contacts-error" class="text-danger mt-3" hidden></div>
                        <input type="submit" value="{!! __('form.feedback.send') !!}" id="modal-thanks" class="btn contacts__form-btn">
                    </form>
                </div>
                <div class="contacts__maps">
                    {!! $text !!}
                </div>
            </div>
        </div>
    </section>
@endsection
