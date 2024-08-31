<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('meta_title', $site_settings['meta_title'] ?? '')</title>

        <meta name="keywords" content="@yield('meta_keyword', $site_settings['meta_keyword'] ?? '')" />
        <meta name="description" content="@yield('meta_description', $site_settings['meta_description'] ?? '')" />
		<meta name="author" content="okler.net">

		<!-- Favicon -->
        <link rel="icon" href="{{ asset("img/favicon.ico") }}" sizes="32x32"/>
        <link rel="icon" href="{{ asset("img/apple-touch-icon.png") }}" sizes="192x192"/>
        <link rel="apple-touch-icon" href="{{ asset("img/apple-touch-icon.png") }}"/>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- for Facebook -->
        <meta property="og:title" content="@yield('meta_title', $site_settings['meta_title'] ?? '')" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="@yield('meta_image', asset($site_settings['meta_image'] ?? ''))" />
        <meta property="og:url" content="@yield('canonical', url()->current())" />
        <meta property="og:description" content="@yield('meta_description', $site_settings['meta_description'] ?? '')" />
        <meta property="og:site_name" content="{{ \Request::getHost() }}" />

        <!-- for Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="@yield('meta_title', $site_settings['meta_title'] ?? '')" />
        <meta name="twitter:description" content="@yield('meta_description', $site_settings['meta_description'] ?? '')" />
        <meta name="twitter:image" content="@yield('meta_image', asset($site_settings['meta_image'] ?? ''))" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">



        <link rel="stylesheet" id="vkExUnit_common_style-css" href="{{ asset('assets/css/css-site.css') }}" type="text/css">
        <link rel="stylesheet" id="vkExUnit_common_style-css" href="{{ asset('assets/css/vkExUnit_style.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('assets/css/style.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('assets/css/styles.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="veu-cta-css" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="bootstrap-4-style-css" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="lightning-common-style-css" href="{{ asset('assets/css/common.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="lightning-design-style-css" href="{{ asset('assets/css/style-v1.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="lightning-theme-style-css" href="{{ asset('assets/css/style-v2.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="addtoany-css" href="{{ asset('assets/css/addtoany.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="jquery-ui-smoothness-css" href="{{ asset('assets/css/jquery-ui.min.css') }}" type="text/css" media="screen">
        <link rel="stylesheet" id="jquery.lightbox.min.css-css" href="{{ asset('assets/css/lightbox.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" id="jqlb-overrides-css" href="{{ asset('assets/css/overrides.css') }}" type="text/css" media="all">
        <script type="text/javascript" async="" src="{{ asset('assets/js/page.js') }}" id="addtoany-core-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-core.min.js') }}" id="jquery-core-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
        <script type="text/javascript" async="" src="{{ asset('assets/js/addtoany.min.js') }}" id="addtoany-jquery-js"></script>
        <link rel="icon" href="{{ asset('assets/images/cropped-favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" href="{{ asset('assets/images/cropped-favicon-192x192.png') }}" sizes="192x192">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/cropped-favicon-180x180.png') }}">
        <meta name="msapplication-TileImage" content="{{ asset('assets/images/cropped-favicon-270x270.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-new.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme-new.css') }}" media="screen">
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick-carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/slick_main.js') }}"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">

		@yield('css')

	</head>
	<body data-rsssl="1" class="@yield("body_class", 'home page-template-default page page-id-11 post-name-home post-type-page bootstrap4 fa_v6_css device-pc cookies-not-set')">
        <a class="skip-link screen-reader-text" href="#main">Move</a>
        <a class="skip-link screen-reader-text" href="#vk-mobile-nav">Navigate</a>

        @include('layouts.header')

        @yield('content')

        @include("layouts.footer")

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const fadeInElements = document.querySelectorAll(".fadein");
                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("is-active");
                                observer.unobserve(entry.target);
                            }
                        });
                    },
                    {
                        threshold: 0.2,
                    }
                );

                fadeInElements.forEach((element) => {
                    observer.observe(element);
                });
            });

            var eio_lazy_vars = {"exactdn_domain":"","skip_autoscale":0,"threshold":0};
            var lightningOpt = {"header_scrool":"1"};
            var JQLBSettings = {"showTitle":"1","useAltForTitle":"1","showCaption":"1","showNumbers":"1","fitToScreen":"1","resizeSpeed":"400","showDownload":"0","navbarOnTop":"0","marginSize":"100","mobileMarginSize":"20","slideshowSpeed":"4000","allowPinchZoom":"1","borderSize":"6","borderColor":"#fff","overlayColor":"#fff","overlayOpacity":"0.7","newNavStyle":"1","fixedNav":"1","showInfoBar":"0","prevLinkTitle":"\u524d\u306e\u753b\u50cf","nextLinkTitle":"\u6b21\u306e\u753b\u50cf","closeTitle":"\u30ae\u30e3\u30e9\u30ea\u30fc\u3092\u9589\u3058\u308b","image":"\u753b\u50cf ","of":"\u306e","download":"\u30c0\u30a6\u30f3\u30ed\u30fc\u30c9","pause":"(\u30b9\u30e9\u30a4\u30c9\u30b7\u30e7\u30fc\u3092\u4e00\u6642\u505c\u6b62\u3059\u308b)","play":"(\u30b9\u30e9\u30a4\u30c9\u30b7\u30e7\u30fc\u3092\u518d\u751f\u3059\u308b)"};
        </script>
        <script type="text/javascript" src="{{ asset('assets/js/lazysizes.min.js') }}" id="eio-lazy-load-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/swv-index.js') }}" id="swv-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/smooth-scroll.min.js') }}" id="smooth-scroll-js-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/lightning.min.js') }}" id="lightning-js-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}" id="bootstrap-4-js-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/core.min.js') }}" id="jquery-ui-core-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/datepicker.min.js') }}" id="jquery-ui-datepicker-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/html5-fallback.js') }}" id="contact-form-7-html5-fallback-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.touchwipe.min.js') }}" id="wp-jquery-lightbox-swipe-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/panzoom.min.js') }}" id="wp-jquery-lightbox-panzoom-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.lightbox.js') }}" id="wp-jquery-lightbox-js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}" id="custom-js"></script>

		@yield('script')
    </body>
</html>
