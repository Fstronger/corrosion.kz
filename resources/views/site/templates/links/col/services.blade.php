@if (count($links) > 0)
    @foreach($links as $link)
        <div class="banner__item">
            <img src="/{{ $link->photo }}" class="banner__item-img" alt="">
            <p class="banner__item-p">{{ $link->title }}
            </p>
            <a href="/{{ app()->getLocale() }}/links/services" class="banner__item-btn">{!! __('translations.banner_item_btn') !!} <img src="/site/img/icons/small-btn-arrow-orange.png" alt=""></a>
        </div>
    @endforeach
@endif
