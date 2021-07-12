<div class="company__block company-page__block container">
    <div class="company__img">
        @foreach($images as $image)
            <img src="/{{ $image->link }}" alt="">
        @endforeach
    </div>
    <div class="company__info">
        {!! $text !!}
    </div>
</div>
