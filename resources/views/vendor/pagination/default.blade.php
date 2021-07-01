@if ($paginator->hasPages())
    <ul class="pagination text-size-4 font-weight-300">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="pagination__item">
                <a class="pagination__arrow" href="{{ $paginator->previousPageUrl() }}" title="{!! __('translations.page_prev') !!}">
                    {!! icon('icon--arrow-2-left') !!}
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination__item is-disabled"><span class="pagination__link is-disabled">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination__item is-active"><span class="pagination__link is-active">{{ $page }}</span></li>
                    @else
                        <li class="pagination__item"><a class="pagination__link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination__item">
                <a class="pagination__arrow" href="{{ $paginator->nextPageUrl() }}" title="{!! __('translations.page_next') !!}">
                    {!! icon('icon--arrow-2-right') !!}
                </a>
            </li>
        @endif
    </ul><!-- /.pagination -->
@endif


{{--<ul class="pagination text-size-4 font-weight-300">
    <li class="pagination__item">
        <a class="pagination__arrow link" href="#" title="{!! __('translations.page_prev') !!}">
            {!! icon('icon--arrow-left') !!}
        </a>
    </li>

    <li class="pagination__item"><a class="pagination__link" href="#">1</a></li>
    <li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
    <li class="pagination__item is-disabled"><span class="pagination__link is-disabled">...</span></li>
    <li class="pagination__item"><a class="pagination__link" href="#">4</a></li>
    <li class="pagination__item is-active"><span class="pagination__link is-active">5</span></li>
    <li class="pagination__item"><a class="pagination__link" href="#">6</a></li>
    <li class="pagination__item"><a class="pagination__link" href="#">7</a></li>
    <li class="pagination__item"><a class="pagination__link" href="#">8</a></li>
    <li class="pagination__item"><a class="pagination__link" href="#">9</a></li>

    <li class="pagination__item">
        <a class="pagination__arrow link" href="#" title="{!! __('translations.page_next') !!}">
            {!! icon('icon--arrow-right') !!}
        </a>
    </li>
</ul><!-- /.pagination -->--}}
