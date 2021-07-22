@if (count($links) > 0)
    @foreach($links as $link)
        <a href="tel:{{ $link->title }}" class="header-mobile__menu-phone">
            <img src="/site/img/icons/phone.png" alt="">
            {{ $link->title }}
        </a>
    @endforeach
@endif
