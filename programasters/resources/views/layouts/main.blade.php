<!doctype html>
<html class="no-js" lang="zxx">

@include('home.meta')

<body>
    @include('templates.contacto-principal')
    @include('home.header')

    @yield('content')
    @include('templates.footer')
    @include('home.scripts')
    @yield('javascript')
</body>

</html>