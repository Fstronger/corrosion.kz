<div class="company__block container">
    <div class="company__info">
        <div class="company__title">{{ $section->name }}</div>
        <div class="company__text">
            {!! $text !!}
        </div>
        <a href="/{{ app()->getLocale() }}/page/about" class="company__btn">Узнать больше <img src="/site/img/icons/big-btn-arrow-orange.png" alt=""></a>
    </div>
    <div class="company__img">
        <img src="/site/img/company-img-1.png" alt="">
        <img src="/site/img/bg-ellipse-1.png" class="bg-ellipse-ee" alt="">
        <img src="/site/img/company-img-2.png" alt="">
    </div>
</div>
