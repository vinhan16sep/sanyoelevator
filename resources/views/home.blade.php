@extends('layouts.app')

@section('content')


<div id="top__fullcarousel" data-interval="4000" class="carousel slide slide-main" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item item item-1 active">
            <picture>
                <source media="(max-width: 767px)" data-srcset="{{ asset('assets/images/top_01_sp.jpg') }}" srcset="{{ asset('assets/images/top_01_sp.jpg') }}">
                <img src="{{ asset('assets/images/top_01.jpg') }}" alt="" class="slide-item-img d-block w-100 lazyloaded" data-src="{{ asset('assets/images/top_01.jpg') }}" decoding="async" data-eio-rwidth="1920" data-eio-rheight="600">
            </picture>
            <div class="slide-text-set mini-content">
                <div class="mini-content-container-1 container" style="text-align:left"></div>
            </div>
            <!-- .mini-content -->
        </div>
        <!-- [ /.item ] -->
    </div>
    <!-- [ /.carousel-inner ] -->
</div>
<!-- [ /#top__fullcarousel ] -->


<div class="section siteContent">
    <div class="container">
        <div class="row">
            <div class="col mainSection mainSection-col-one">
                <article id="post-11" class="post-11 page type-page status-publish has-post-thumbnail hentry wpautop">
                    <div class="entry-body">
                        <article>
                            <section class="fadein is-active">
                                <div class="triangle_box">
                                    <p class="intro">{{ __("Homepage Intro") }}</p>
                                </div>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">{{ __("News") }}</h1>
                                <p class="title_sub">{{ __("News Sub Header") }}</p>
                                <div class="wide_notice_box">
                                    <div class="notice_box">
                                        <dl class="notice_list"></dl>
                                    </div>
                                </div>
                                <p class="news_btn"><a href="#">{{ __("News List") }}</a></p>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">{{ __("Elevator Lineup") }}</h1>
                                <p class="title_sub">{{ __("Elevator Lineup Sub Header") }}</p>
                                <div class="top_slider_box">
                                    <div class="slick_slider slick-slider">
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                    </div>
                                    <p class="news_btn"><a href="introduction/">{{ __("Product Introduction") }}</a></p>
                                </div>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">{{ __("Business Contents") }}</h1>
                                <p class="title_sub">{{ __("Business details") }}</p>
                                <ul class="business">
                                    @foreach ($business as $item)
                                    <li>
                                        <div class="circle">
                                            <p>{!! $item["title_$language"] !!}</p>
                                            <h4>{{ $item["sub_title_$language"] }}</h4>
                                        </div>
                                        <p class="explanation">{{ $item["description_$language"] }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <p class="news_btn"><a href="">{{ __("Learn More") }}</a></p>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">{{ __("Our Strengths") }}</h1>
                                <p class="title_sub">{{ __("Our Strengths Sub") }}</p>
                                <ul class="trengths">
                                    @foreach ($strengths as $item)
                                    <li>
                                        <p><img decoding="async" src="{{ getImage($item['image']) }}" alt="{{ $item["title_$language"] }}" width="500" height="333" class="aligncenter size-full wp-image-542 lazyautosizes lazyloaded">
                                        </p>
                                        <h4>{{ $item["title_$language"] }}</h4>
                                        <p>{{ $item["description_$language"] }}</p>
                                    </li>
                                    @endforeach
                                    <li></li>
                                </ul>
                                <p class="news_btn"><a href="#trengths">{{ __("Learn More") }}</a></p>
                            </section>
                        </article>


                        <div class="addtoany_share_save_container addtoany_content addtoany_content_bottom">
                            <div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="" data-a2a-title="HOME" style="line-height: 32px;">
                                <a class="a2a_button_facebook" href="#" title="Facebook" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(8, 102, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path></svg></span><span class="a2a_label"></span></a>

                                <a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a10 10 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.7 9.7 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.94 4.94 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a5 5 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174q-.476-.001-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.9 9.9 0 0 1-6.114 2.107q-.597 0-1.175-.068a13.95 13.95 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013q0-.32-.015-.637c.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label"></span></a>

                                <a class="a2a_button_line" href="/#line" title="Line" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_line" style="background-color: rgb(0, 195, 0);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 14.304c0-5.37-5.384-9.738-12-9.738S4 8.936 4 14.304c0 4.814 4.27 8.846 10.035 9.608.39.084.923.258 1.058.592.122.303.08.778.04 1.084l-.172 1.028c-.05.303-.24 1.187 1.04.647s6.91-4.07 9.43-6.968c1.74-1.905 2.57-3.842 2.57-5.99zM11.302 17.5H8.918a.63.63 0 0 1-.63-.63V12.1a.63.63 0 0 1 1.26.002v4.14h1.754c.35 0 .63.28.63.628a.63.63 0 0 1-.63.63m2.467-.63a.63.63 0 0 1-.63.628.63.63 0 0 1-.63-.63V12.1a.63.63 0 1 1 1.26 0zm5.74 0a.632.632 0 0 1-1.137.378l-2.443-3.33v2.95a.631.631 0 0 1-1.26 0V12.1a.634.634 0 0 1 .63-.63.63.63 0 0 1 .504.252l2.444 3.328V12.1a.63.63 0 0 1 1.26 0v4.77zm3.853-3.014a.63.63 0 1 1 0 1.258H21.61v1.126h1.755a.63.63 0 1 1 0 1.258H20.98a.63.63 0 0 1-.628-.63V12.1a.63.63 0 0 1 .63-.628h2.384a.63.63 0 0 1 0 1.258h-1.754v1.126h1.754z"></path></svg></span><span class="a2a_label"></span></a>
                            </div>
                        </div>


                    </div>
                </article>
                <!-- [ /#post-11 ] -->
            </div>
            <!-- [ /.mainSection ] -->
        </div>
        <!-- [ /.row ] -->
    </div>
    <!-- [ /.container ] -->
</div>
<!-- [ /.siteContent ] -->


@endsection
