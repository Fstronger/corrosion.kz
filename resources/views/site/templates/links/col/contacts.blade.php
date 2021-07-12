@if (count($links) > 0)
    <div class="contacts__adress">
        @foreach($links as $link)
            <div class="contacts__adress-info">
                <img src="/{{ $link->photo }}" alt="">
                {!! $link->description !!}
            </div>
        @endforeach
    </div>
@endif
