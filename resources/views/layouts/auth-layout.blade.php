<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("pageTitle")</title>
    @livewireStyles

    <!-- CSS -->
    @include("users.css.users-css")
    <!-- CSS -->

    <!-- Scripts -->
    {{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="font-sans antialiased">

<div class="min-h-screen">
    <div class="header section">
        <!-- Header Top Start -->
        {{--        @include("users.header.header-top")--}}
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
{{--        @include("users.header.header-bottom")--}}
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
{{--        @include("users.header.mobile-menu-wrapper")--}}
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Start -->
{{--        @include("users.header.offcanvas-search")--}}
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
{{--        @include("users.header.cart-offcanvas-wrapper")--}}
        <!-- Cart Offcanvas End -->
    </div>

    <!-- Page Content -->
    <main>
        @yield("content")
    </main>

    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
{{--        @include("users.footer.footer-top")--}}
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
{{--        @include("users.footer.footer-bottom")--}}
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Scroll Top Start -->
{{--    <a href="#" class="scroll-top" id="scroll-top">--}}
{{--        <i class="arrow-top fa fa-long-arrow-up"></i>--}}
{{--        <i class="arrow-bottom fa fa-long-arrow-up"></i>--}}
{{--    </a>--}}
    <!-- Scroll Top End -->
</div>

<!-- JS -->
@include("users.js.users-js")
<!-- JS -->
@livewireScripts
</body>
</html>
