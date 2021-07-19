@if (count($links) > 0)
    <div class="footer__head-content">
        @foreach($links as $link)
            <div class="footer__head-content-info">
                <img src="/{{ $link->photo }}" alt="">
                {!! $link->description !!}
            </div>
        @endforeach
    </div>
@endif
