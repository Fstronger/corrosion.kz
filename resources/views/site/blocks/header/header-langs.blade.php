<button type="button" class="header-desctop__btn-dropdown dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
    <img src="/site/img/icons/lang-{{ app()->getLocale() }}.png" class="header-desctop__head-lang" alt="">
</button>

<div class="dropdown-menu dropdown-menu-lang" aria-labelledby="dropdownMenuReference">
    <div class="cub"></div>
    @foreach ($langs as $lang)
        @if ($lang->key !== app()->getLocale())
            <a href="{{ LaravelLocalization::getLocalizedURL($lang->key) }}" class="dropdown-item">
                <img src="/site/img/icons/lang-{{ $lang->key }}.png" class="header-desctop__head-lang" alt="">
                {{ $lang->name }}
            </a>
        @endif
    @endforeach
</div>
