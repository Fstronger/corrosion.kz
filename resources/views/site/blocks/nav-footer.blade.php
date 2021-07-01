@php
    $structures = collect($structures);
    $structures->forget(7);
@endphp
@foreach ($structures->chunk(3) as $chunk)
    <div class="footer__head-content">
        <ul>
        @foreach ($chunk as $structure)
            @php $name = 'name_' . app()->getLocale(); @endphp
                <a href="/{{ app()->getLocale() }}{{ $structure['link'] ?? '' }}">
                    <li>
                    {{ (isset($structure[$name]) && !is_null($structure[$name])) ? $structure[$name] : $structure['name_ru'] }}
                    </li>
                </a>
        @endforeach
        </ul>
    </div>
@endforeach
