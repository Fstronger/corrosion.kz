<div class="s-page__aside{{ isset($pageAsideClass) ? ' ' . $pageAsideClass : '' }}">
    <aside class="aside{{ isset($asideClass) ? ' ' . $asideClass : '' }}">
        <div class="aside__inner row">{{ $slot }}</div>
    </aside>
</div>
