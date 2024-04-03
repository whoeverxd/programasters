<!doctype html>
<html class="no-js" lang="zxx">

@include('templates.meta')

<body>
    @include('templates.contacto-principal')
    @include('templates.header')

    @yield('content')
    @include('templates.footer')
    @yield('scripts')
</body>

</html>