@includeIf('include.header')
@hasSection('content')
    @yield('content')
@else
    <h1>Page not found</h1>
@endif
@includeIf('include.footer')