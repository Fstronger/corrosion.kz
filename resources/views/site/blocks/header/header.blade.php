<header class="header-desctop">
    <div class="header-desctop__head">
        <div class="container">
            <div class="header-desctop__head-content">
                <a href="/{{app()->getLocale()}}"><img src="/site/img/logo.png" class="header-desctop__head-logo" alt=""></a>
                @include('site.blocks.header.header-langs')
            </div>
            <div class="header-desctop__head-content">
                <div class="btn-group">
                    {!! getLinks('kontakty-block-header', 'contacts-header') !!}
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

                <a href="#" id="modal-application-mobile" class="btn header-mobile__menu-btn">{!! __('form.feedback.send') !!}</a>
            </div>
            {!! getLinks('kontakty-block-header', 'contacts-header-mobile') !!}
            @include('site.blocks.nav-mobile')
            @include('site.blocks.header.header-langs-mobile')
        </div>
    </div>
</header>
