<footer class="section siteFooter">
    <div class="footerMenu">
        <div class="container">
            <nav class="menu-footer_menu-container">
                <ul id="menu-footer_menu" class="menu nav">
                    <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-28"><a rel="privacy-policy" href="{{ route("privacy_policy") }}">{{ __("Privacy Policy") }}</a></li>
                    <li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="{{ route("site_map") }}">{{ __("Sitemap") }}</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container sectionBox footerWidget">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <aside class="widget widget_text" id="text-2">
                    <div class="textwidget">
                        <p>
                            <a href="" title="Nippon Sanyo Lift Associate 株式会社">
                                <img decoding="async" class="aligncenter size-full wp-image-500 lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMMAAABkAQAAAAATHblRAAAAAnRSTlMAAHaTzTgAAAAZSURBVEjH7cGBAAAAAMOg+VMf4ApVAQDAGwooAAFK+upgAAAAAElFTkSuQmCC" alt="Nippon Sanyo Lift Associate株式会社" width="195" height="100" data-src="{{ asset('assets/images/under_logo.png') }}" data-eio-rwidth="195" data-eio-rheight="100">
                            </a></p>
                    </div>
                </aside>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="container sectionBox copySection text-center">
        <p>
            Copyright © <script type="text/javascript"> myDate = new Date() ;myYear = myDate.getFullYear ();document.write(myYear); </script>2024 Nippon Sanyo. All Rights Reserved.
        </p>
    </div>
</footer>

<div id="vk-mobile-nav-menu-btn" class="vk-mobile-nav-menu-btn">MENU</div>
<div class="vk-mobile-nav vk-mobile-nav-drop-in" id="vk-mobile-nav">
    <nav class="vk-mobile-nav-menu-outer" role="navigation">
        <ul id="menu-main_menu-1" class="vk-menu-acc menu vk-menu-acc-active">
            <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item menu-item-22"><a href="" aria-current="page">{{ __("Home") }}</a></li>
            <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-24">
                <a href="{{ route('products') }}">{{ __("Product Introduction") }}</a>
                <span class="acc-btn acc-btn-open"></span>
                <ul class="sub-menu acc-child-close">

                    @foreach ($activedProductCategories as $item)
                    <li id="menu-item-369" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{ route('products')  }}/#{{ $item['slug'] }}">{{ $item["title_$language"] }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                <a href="{{ route('about') }}">{{ __("Company Profile") }}</a>
            </li>
            <li id="menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-557">
                <a href="{{ route('business') }}">{{ __("Business Contents") }}</a>
                <span class="acc-btn acc-btn-open"></span>
                <ul class="sub-menu acc-child-close">
                    <li id="menu-item-558" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-558"><a href="{{ route('business') }}/#trengths">{{ __("Our Strengths") }}</a></li>
                </ul>
            </li>
            <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="{{ route('part') }}">{{ __("Check Product") }}</a></li>
            <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="{{ route('contact') }}">{{ __("Inquiry") }}</a></li>
            <li class="menu-item menu-item-gtranslate menu-item-has-children notranslate">
                <a href="#" data-gt-lang="ja" class="gt-current-wrapper notranslate glink nturl gt_raw_link-xxjexk" title="Japanese">
                    <img src="{{ app()->getLocale() == 'jp' ? asset('assets/images/ja.svg') : asset('assets/images/en-us.svg') }}" width="24" height="24" loading="lazy" decoding="async" class=" lazyloaded" data-eio-rwidth="24" data-eio-rheight="24">
                    <span>{{ app()->getLocale() == 'jp' ? __("Japanese") : __("English") }}</span>
                </a>
                <span class="acc-btn acc-btn-open"></span>
                <ul class="dropdown-menu sub-menu acc-child-close">
                    <li class="menu-item menu-item-gtranslate-child">
                        <a href="{{ route('set-language', ['locale' => 'jp']) }}" class="gt-current-lang notranslate glink nturl gt_raw_link-xxjexk" title="Japanese">
                            <img src="{{ asset('assets/images/ja.svg') }}" width="24" height="24" alt="ja" loading="lazy" decoding="async" class="lazyload" data-eio-rwidth="24" data-eio-rheight="24">
                            <span>{{ __("Japanese") }}</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-gtranslate-child">
                        <a href="{{ route('set-language', ['locale' => 'en']) }}" class="notranslate glink nturl gt_raw_link-xxjexk" title="English">
                            <img src="{{ asset('assets/images/en-us.svg') }}" width="24" height="24" alt="en" loading="lazy" decoding="async" class="lazyload" data-eio-rwidth="24" data-eio-rheight="24">
                            <span>{{ __("English") }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<a href=#top" id="page_top" class="page_top_btn">PAGE TOP</a>
