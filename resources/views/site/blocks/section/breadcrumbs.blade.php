@if (!empty($breadcrumbs))
    <section class="content-menu">
        <div class="content-menu__block container">
            <a href="/{{ app()->getLocale() }}/" class="content-menu__home">Главная</a>
            @foreach($breadcrumbs as $breadcrumb)
                <a href="/{{ app()->getLocale() }}{{ $breadcrumb['link'] }}" class="content-menu__page">{{ str_limit($breadcrumb['name'], 100) }}</a>
            @endforeach
        </div>
    </section>
@endif
