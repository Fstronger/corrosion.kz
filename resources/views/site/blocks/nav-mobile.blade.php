<ul class="header-mobile__menu-links">
    @foreach($structures as $structure)
        @php $activeLevels = getUpperLevels(request()->alias) @endphp
        @php $name = 'name_' . app()->getLocale(); @endphp
        @php $isActiveItem = in_array($structure['alias'], $activeLevels) ? ' header-mobile__menu-link-active' : ''; @endphp

        <a href="/{{ app()->getLocale() }}{{ $structure['link'] ?? '' }}">
            <li class="header-mobile__menu-link {{ $isActiveItem }}">
                {{ (isset($structure[$name]) && !is_null($structure[$name])) ? $structure[$name] : $structure['name_ru'] }}
            </li>
        </a>
    @endforeach
</ul>
