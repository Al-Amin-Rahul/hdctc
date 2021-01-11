<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#89C74A">
        <title>@yield('title')</title>
        <meta name="msnbot" content="index,follow" />
        <meta name="robots" content="index,follow" />
        <meta name="googlebot" content="all" />
        <meta property="fb:app_id" content="345891736236545" />
        @yield('meta')
        <link rel="icon" href="{{ asset("/") }}front/images/tab.png" type="image/gif" sizes="32x32">
        <link href="{{ asset("/") }}front/css/bootstrap.css" rel="stylesheet">
        <link href="{{ asset("/") }}fontawesome/css/all.min.css" rel="stylesheet">
        <link href="{{ asset("/") }}front/css/jquery.lighter.css" rel="stylesheet" type="text/css">
        <link href="{{ asset("/") }}front/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset("/") }}front/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Load Facebook SDK for JavaScript -->
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="110079830845589"
        theme_color="#67b868">
      </div>
        <x-header/>
        <x-mobile-menu/>
        @yield('body')
        <x-footer/>
        @include('sweetalert::alert')
    </body>
    <script src="{{ asset("/") }}front/js/jquery.min.js"></script>
    <script src="{{ asset("/") }}front/js/select.js"></script>
    <script src="{{ asset("/") }}front/js/active.js"></script>
    <script src="{{ asset("/") }}front/js/bootstrap.js"></script>
    <script src="{{ asset("/") }}front/js/jquery.lighter.js"></script>
    <script src="{{ asset("/") }}front/js/owl.carousel.min.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 3,
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            autoHeight: false,
            autoHeightClass: 'owl-height',
            nav: false,
            dots: false,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                768: {
                    items: 2,
                    loop: true
                },
                1000: {
                    items: 3,
                    loop: true
                },
            }

        });
    </script>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
        </script>
</html>
