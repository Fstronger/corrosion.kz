@if ($langs)
    <div class="header-mobile__lang">
        @foreach ($langs as $lang)
            <a href="{{ LaravelLocalization::getLocalizedURL($lang->key) }}">
                <img src="site/img/icons/lang-{{$lang->key}}.png"
                     class="header-desctop__head-lang {{ app()->getLocale() === $lang->key ? ' header-desctop__head-lang-active' : null }}"
                     alt="">
            </a>
        @endforeach
    </div>
@endif
