@if ($news->count() > 0)
    <div class="news__block container">
        <div class="news__head">
            <div class="news__title">{{ $section->name }}</div>
            <div class="news__block-btn">
                <a href="{{ $section->path }}" class="news__btn">{!! __('translations.all_news') !!} <img src="/site/img/icons/small-btn-arrow-orange.png" alt=""></a>
            </div>
        </div>
        <div class="news__items">
            @php $newsMain = $news->first(); @endphp
            <div class="news__item-main">
                <div class="news__item-main-data">{{ formatDate($newsMain->published_at) }}</div>
                <a href="{{ $newsMain->url }}"><div class="news__item-main-title">{{ $newsMain->title }}</div></a>
            </div>

            <div class="news__items-content">
                @foreach($news as $newsItem)
                    @if(!$loop->first)
                        <div class="news__item">
                            <div class="news__item-data">{{ formatDate($newsItem->published_at) }}</div>
                            <a href="{{ $newsItem->url }}"><div class="news__item-title">{{ $newsItem->title }}</div></a>
                            <div class="news__item-text">{{ str_limit(strip_tags($newsItem->short), 75) }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif
