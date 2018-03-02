<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>
    @include('modules.top-bar')

    @yield('header-content')

    @yield('main-content')

    @include('modules.footer-bar')

    @yield('javascript')

    @include('layouts.footer')
</body>
</html>