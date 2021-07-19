<header class="header-desctop">
    <div class="header-desctop__head">
        <div class="container">
            <div class="header-desctop__head-content">
                <a href="/{{app()->getLocale()}}"><img src="/site/img/logo.png" class="header-desctop__head-logo" alt=""></a>
                @include('site.blocks.header.header-langs')
            </div>
            <div class="header-desctop__head-content">
                <div class="btn-group">
                    <a href="" class="header-desctop__btn-dropdown">
                        <img src="/site/img/icons/phone.png" class="header-desctop__head-phone" alt="">
                        + 7 701 527 60 90
                    </a>
                    <button type="button" class="header-desctop__btn-dropdown dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                        <img src="/site/img/icons/arrow-down.png"class="header-desctop__head-dropbtn"alt="">
                    </button>
                    <div class="dropdown-menu dropdown-menu-phone" aria-labelledby="dropdownMenuReference">
                        <div class="cub"></div>
                        <a href="" class="dropdown-item">
                            <img src="/site/img/icons/phone.png" class="header-desctop__head-phone" alt="">
                            + 7 701 527 60 90
                        </a>
                    </div>
                </div>
                <a href="#" id="modal-application" class="btn header-desctop__head-btn">{!! __('form.feedback.send') !!}</a>
            </div>
        </div>
    </div>
    <div class="header-desctop__menu">
        @include('site.blocks.nav')
    </div>
</header>


<header class="header-mobile" id="fixedMenu">
    <div class="header-mobile__head">
        <div class="container">
            <a href="/{{app()->getLocale()}}">
                <img src="/site/img/logo.png" class="header-mobile__head-logo" alt="">
            </a>
            <a id="toggleMenu" onClick="imgsrc()">
                <img id="image" src="/site/img/icons/menu.png" alt="">
            </a>
        </div>
    </div>
    <div class="header-mobile__menu" id="showMenu" onClick="imgsrc()">
        <div class="container">
            <div class="">

                <a href="#" id="modal-application" class="btn header-mobile__menu-btn">{!! __('form.feedback.send') !!}</a>
            </div>
            <a href="" class="header-mobile__menu-phone">
                <img src="/site/img/icons/phone.png" alt="">
                + 7 701 527 60 90
            </a>
            <a href="" class="header-mobile__menu-phone">
                <img src="/site/img/icons/phone.png" alt="">
                + 7 701 527 60 90
            </a>
            @include('site.blocks.nav-mobile')
            @include('site.blocks.header.header-langs-mobile')
        </div>
    </div>
</header>
