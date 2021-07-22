@if (count($links) > 0)
    <a href="tel:{{ $links->first()->title }}" class="header-desctop__btn-dropdown">
        <img src="/site/img/icons/phone.png" class="header-desctop__head-phone" alt="">
        {{ $links->first()->title }}
    </a>
    <button type="button" class="header-desctop__btn-dropdown dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
        <img src="/site/img/icons/arrow-down.png"class="header-desctop__head-dropbtn"alt="">
    </button>
    <div class="dropdown-menu dropdown-menu-phone" aria-labelledby="dropdownMenuReference">
        <div class="cub"></div>
        <a href="tel:{{ $links->skip(1)->first()->title }}" class="dropdown-item">
            <img src="/site/img/icons/phone.png" class="header-desctop__head-phone" alt="">
            {{ $links->skip(1)->first()->title }}
        </a>
    </div>
@endif
