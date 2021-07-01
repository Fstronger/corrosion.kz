@include('site.blocks.base.header')

    @include('site.blocks.header.header')

    <main class="main">
        @yield('main')
    </main>

    @include('site.blocks.footer.footer')

@include('site.blocks.base.footer')
