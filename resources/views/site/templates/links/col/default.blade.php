@if (count($links) > 0)
    <section class="staff">
        <div class="staff__block container">
            <div class="staff__title">{{ $section->name }}</div>
            <div class="staff__slider">
                @foreach($links as $link)
                    <img src="/{{ $link->photo }}" alt="">
                @endforeach
            </div>
        </div>
    </section>
@endif
