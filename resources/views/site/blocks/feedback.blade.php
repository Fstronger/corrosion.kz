<div id="modal-application-toggle" class="modal ">
    <div class="modal__background">
        <div class="modal__block animate__animated animate__bounce">
            <form action="" class="contacts__form">
                <div class="contacts__form-close"><img id="closs-modal-application" src="/site/img/icons/close-2.png" alt=""></div>
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
    </div>
</div>

<div id="modal-thanks-toggle" class="modal ">
    <div class="modal__background">
        <div class="modal__block animate__animated animate__bounce">
            <div class="contacts__form-close"><img id="closs-modal-thanks" src="/site/img/icons/close-2.png" alt=""></div>
            <div class="modal__thanks">
                <img src="/site/img/logo.png" class="modal__thanks-img" alt="">
                <div class="modal__thanks-title">{!! __('form.feedback.success.title') !!}</div>
                <div class="modal__thanks-text">{!! __('form.feedback.success.desc') !!}</div>
            </div>
        </div>
    </div>
</div>
