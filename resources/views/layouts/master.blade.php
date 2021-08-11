<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br" itemscope itemtype="https://schema.org/Article">
<!--<![endif]-->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ config('app.name') }}</title>

    <meta content="{{ csrf_token() }}" name="csrf-token">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="canonical" href="/"/>
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="keywords" content="">
    <meta name="author" content="{{ config('app.name') }}">

    <!-- og tags -->
    <meta property='og:type' content='website'/>
    <meta property="og:locale" content="pt_BR">
    <meta property='og:title' content="{{ config('app.name') }}"/>
    <meta property='og:url' content='{{ config('app.url') }}'/>
    <meta property='og:description' content='{{ config('app.name') }}'/>
    <meta property='og:site_name' content='{{ config('app.name') }}'/>
    <meta property='og:image' content="{{ asset('images/favicon/ms-icon-144x144.png') }}"/>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="144">
    <meta property="og:image:height" content="144">

    <!-- Schema -->
    <meta itemprop="name" content="{{ config('app.name') }}">
    <meta itemprop="description" content="{{ config('app.name') }}">

    <!-- ICONES -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="144x144" href="{{ asset('images/favicon/favicon-144x144.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicon/manifest.json') }}">

    <meta name="msapplication-TileColor" content="#2c4939">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#2c4939">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Jquery -->
{{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
      integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>--}}

<!-- Slick Carousel -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

    <!-- Tooltipster -->
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/css/tooltipster.bundle.min.css"
          integrity="sha512-RwhQzi0EhwZ9hHs18SqM7ICqW/MH/B17PouhdCuzaUQYEdx2S4WPgkhLeZPvGr2Kb1FIm4gaIbMJGwZtxDCLQA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css"
          integrity="sha512-QjN/tx7PsXONFTqVCSTmvHP5cYZ1nhey68z+pQB99OO7QOuSocyBPANIHPRfr9tpZrzj0QWEcBjc9Fg1ZF/jfQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="{{ asset('vendor/mdb/css/mdb.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}?v={{ time() }}">--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="//cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    @yield('css')
    @yield('js_tags')
</head>

<body>
@if(Route::current()->getName() === 'home')
    <main class="wrapper">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </main>
    <!-- Jquery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

    <!-- Popper -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- Scripts Gerais -->
    <script src="//cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ asset('vendor/tooltipster/dist/js/tooltipster.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>

    <script src="{{ asset('js/init.js') }}"></script> {{--?v={{ time() }}--}}
    <script src="{{ asset('vendor/mdb/js/mdb.min.js') }}"></script>

@else
    <div id="wrapper">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/mdb/js/mdb.min.js') }}"></script>
@endif
@yield('js')

<div id="cart-list-overlay"></div>


</body>

</html>
