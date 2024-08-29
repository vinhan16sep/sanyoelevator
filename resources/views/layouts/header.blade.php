<header class="siteHeader">
    <div class="container siteHeadContainer">
        <div class="navbar-header">
            <h1 class="navbar-brand siteHeader_logo">
                <a href="">
                     <span>
                        <img src="{{ asset('assets/images/nsl_logo.svg') }}" alt="Nippon Sanyo Lift Associate 株式会社" data-src="{{ asset('assets/images/nsl_logo.svg') }}" decoding="async" class=" lazyloaded">
                     </span>
                </a>
            </h1>
        </div>
        <div id="gMenu_outer" class="gMenu_outer">
            <nav class="menu-main_menu-container">
                <ul id="menu-main_menu" class="menu gMenu vk-menu-acc vk-menu-acc-active">
                    <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item"><a href=""><strong class="gMenu_name">{{ __("Home") }}</strong></a></li>
                    <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                        <a href="introduction/"><strong class="gMenu_name">{{ __("Product Introduction") }}</strong></a>
                        <span class="acc-btn acc-btn-open"></span>
                        <ul class="sub-menu acc-child-close">
                            <li id="menu-item-369" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="introduction/#passenger_elevator">Thang máy chở khách</a></li>
                            <li id="menu-item-370" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="introduction/#luggage_elevator">Thang máy hành lý</a></li>
                            <li id="menu-item-371" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="introduction/#home_lift">Thang máy gia đình</a></li>
                            <li id="menu-item-372" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="introduction/#small_luggage">Thang máy cho hành lý nhỏ</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="about_us/"><strong class="gMenu_name">{{ __("Company Profile") }}</strong></a></li>
                    <li id="menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                        <a href=""><strong class="gMenu_name">{{ __("Business Contents") }}</strong></a>
                        <span class="acc-btn acc-btn-open"></span>
                        <ul class="sub-menu acc-child-close">
                            <li id="menu-item-558" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#trengths">{{ __("Our Strengths") }}</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="contact_us/"><strong class="gMenu_name">{{ __("Inquiry") }}</strong></a></li>
                    <li class="menu-item menu-item-gtranslate menu-item-has-children notranslate">
                        <a href="#" class="gt-current-wrapper notranslate glink nturl gt_raw_link-xxjexk">
                            <img src="{{ app()->getLocale() == 'jp' ? asset('assets/images/ja.svg') : asset('assets/images/en-us.svg') }}" width="24" height="24" loading="lazy" decoding="async" class=" lazyloaded" data-eio-rwidth="24" data-eio-rheight="24">
                            <span>{{ app()->getLocale() == 'jp' ? __("Japanese") : __("English") }}</span>
                        </a>
                        <span class="acc-btn acc-btn-open"></span>
                        <ul class="dropdown-menu sub-menu acc-child-close">
                            <li class="menu-item menu-item-gtranslate-child">
                                <a href="{{ route('set-language', ['locale' => 'jp']) }}" class="gt-current-lang notranslate glink nturl gt_raw_link-xxjexk">
                                    <img src="{{ asset('assets/images/ja.svg') }}" width="24" height="24" alt="ja" loading="lazy" decoding="async" class=" ls-is-cached lazyloaded" data-eio-rwidth="24" data-eio-rheight="24">
                                    <span>{{ __("Japanese") }}</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-gtranslate-child">
                                <a href="{{ route('set-language', ['locale' => 'en']) }}" class="notranslate glink nturl gt_raw_link-xxjexk">
                                    <img src="{{ asset('assets/images/en-us.svg') }}" width="24" height="24" alt="en" loading="lazy" decoding="async" class=" lazyloaded" data-eio-rwidth="24" data-eio-rheight="24">
                                    <span>{{ __("English") }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
