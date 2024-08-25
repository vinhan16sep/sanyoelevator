<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('meta_title', $site_settings['meta_title'] ?? '')</title>	

        <meta name="keywords" content="@yield('meta_keyword', $site_settings['meta_keyword'] ?? '')" />
        <meta name="description" content="@yield('meta_description', $site_settings['meta_description'] ?? '')" />
        {{-- <link rel="canonical" href="@yield('canonical', url()->current())" /> --}}
		<meta name="author" content="okler.net">

		<!-- Favicon -->
        <link rel="icon" href="{{ asset("img/favicon.ico") }}" sizes="32x32"/>
        <link rel="icon" href="{{ asset("img/apple-touch-icon.png") }}" sizes="192x192"/>
        <link rel="apple-touch-icon" href="{{ asset("img/apple-touch-icon.png") }}"/>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">


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

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/skin-corporate-3.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		@yield('css')

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-42715764-11');
		</script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
            @include('layouts.header')

            @yield('content')

            @include("layouts.footer")
        </div>
		

		<!-- Vendor -->
		</script><script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('js/views/view.contact.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>

		@yield('script')
    </body>
</html>
