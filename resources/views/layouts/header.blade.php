<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
    <div class="header-body border-color-primary border-top-0 box-shadow-none">

        <div class="header-top header-top-default border-bottom-0 border-top-0">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills text-uppercase text-2">
                                    <li class="nav-item nav-item-anim-icon">
                                        <a class="nav-link ps-0" href="{{ route("about") }}">
                                            <i class="fas fa-angle-right"></i> {{ __('About Us') }}
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-anim-icon">
                                        <a class="nav-link" href="{{ route("contact") }}">
                                            <i class="fas fa-angle-right"></i> {{ __('Contact Us') }}
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <a href="{{ route("set-language", ["locale" => "en"]) }}">{{ __("English") }}</a> 
                            <span class="set-language"> | </span> 
                            <a href="{{ route("set-language", ["locale" => "jp"]) }}">{{ __("Japanese") }}</a>
                            {{-- <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container z-index-2">
            <div class="header-row py-2">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo header-logo-sticky-change">
                            <a href="/">
                                <img class="header-logo-sticky opacity-0" alt="Porto" width="150" height="48" data-sticky-width="89" data-sticky-height="43" data-sticky-top="88" src="{{ getImage('img/logo-flat-light.png') }}">
                                <img class="header-logo-non-sticky opacity-0" alt="Porto" width="150" height="48" src="{{ getImage('img/logo-default-slim.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <ul class="header-extra-info d-flex align-items-center">
                            <li class="d-none d-sm-inline-flex">
                                <div class="header-extra-info-icon">
                                    <i class="far fa-envelope text-color-primary text-4 position-relative bottom-2"></i>
                                </div>
                                <div class="header-extra-info-text">
                                    <label>{{ __('SEND US AN EMAIL') }}</label>
                                    <strong><a href="mailto:{{ $contactInformations["email"] }}">{{ $contactInformations["email"] }}</a></strong>
                                </div>
                            </li>
                            <li>
                                <div class="header-extra-info-icon">
                                    <i class="fab fa-whatsapp text-color-primary text-4 position-relative bottom-1"></i>
                                </div>
                                <div class="header-extra-info-text">
                                    <label>{{ __('CALL US NOW') }}</label>
                                    <strong><a href="tel:8001234567" class="text-decoration-none text-color-hover-primary">{{ $contactInformations["hotline"] }}</a></strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
            <div class="container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row justify-content-end">
                            <div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '135px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown dropdown-full-color dropdown-light">
                                                <a class="dropdown-item" href="/">
                                                    {{ __("Home") }}
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-light dropdown-mega">
                                                <a class="dropdown-item" href="{{ route("about") }}">
                                                    {{ __("About Us") }}
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-light">
                                                <a class="dropdown-item dropdown-toggle" href="{{ route("products") }}">
                                                    {{ __("Elevator and Escalator") }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach ($activedProductCategories as $item)
                                                        @if ($item["slug"] != "elevator-parts")
                                                        <li>
                                                            <a href="{{ route("productCategory", ["slug" => $item["slug"]]) }}" class="dropdown-item">{{ $item["title_$language"] }}</a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-light">
                                                <a class="dropdown-item" href="{{ route("productCategory", ["slug" => 'elevator-parts']) }}">
                                                    {{ __('Elevator Parts') }}
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-light">
                                                <a class="dropdown-item dropdown-toggle" href="{{ route("projects") }}">
                                                    {{ __('Project') }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach ($activedProjectCategories as $item)
                                                        <li>
                                                            <a href="{{ route("projectCategory", ["slug" => $item["slug"]]) }}" class="dropdown-item">{{ $item["title_$language"] }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-light">
                                                <a class="dropdown-item" href="{{ route("part") }}">
                                                    {{ __('Check Product') }}
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-full-color dropdown-light">
                                                <a class="dropdown-item" href="{{ route("contact") }}">
                                                    {{ __('Contact') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav my-2" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>