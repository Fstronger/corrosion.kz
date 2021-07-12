<div class="company__block container">
    <div class="company__info">
        <div class="company__title">{{ $section->name }}</div>
        <div class="company__text">
            {!! $text !!}
        </div>
        <a href="/{{ app()->getLocale() }}/page/about" class="company__btn">Узнать больше <img src="/site/img/icons/big-btn-arrow-orange.png" alt=""></a>
    </div>
    <div class="company__img">
        @foreach($images as $image)
            <img src="/{{ $image->link }}" alt="">
        @endforeach
    </div>
</div>
