<div class="container">
    <ul>
        @foreach($structures as $structure)
            @php $activeLevels = getUpperLevels(request()->alias) @endphp
            @php $name = 'name_' . app()->getLocale(); @endphp
            @php $isActiveItem = in_array($structure['alias'], $activeLevels) ? ' header-desctop__link-active' : ''; @endphp

            <a href="/{{ app()->getLocale() }}{{ $structure['link'] ?? '' }}">
                <li class="header-desctop__link {{ $isActiveItem }}">
                    {{ (isset($structure[$name]) && !is_null($structure[$name])) ? $structure[$name] : $structure['name_ru'] }}
                </li>
            </a>
        @endforeach
    </ul>
</div>
