@if (count($links) > 0)
    <section class="services">
        <div class="services__block container">
            <div class="services__title">{{ $section->name }}</div>
            <div class="services__items">
                @foreach($links as $link)
                    <div class="services__item">
                        <img src="/{{ $link->photo }}" alt="">
                        <p>{{ $link->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
