<footer class="footer">
    <div class="footer__head">
        <div class="footer__block container">
            <div class="footer__head-content">
                <a href="/{{app()->getLocale()}}"><img src="/site/img/logo-2-white.png" alt=""></a>
            </div>
            @include('site.blocks.nav-footer')
            {!! getLinks('contacts-block', 'contacts-footer') !!}
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__block container">
            <div class="footer__bottom-content">
                {!! __('translations.footer.company') !!}
            </div>
            <div class="footer__bottom-content">
                {!! __('translations.footer.policy') !!}
            </div>
            <div class="footer__bottom-content">
                <img src="/site/img/logo-IM.png" alt="">
            </div>
        </div>
    </div>
</footer>
