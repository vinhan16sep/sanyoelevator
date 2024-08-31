@extends('layouts.app')

@section('css')
    <style>
        .slick-initialized .slick-slide{
            padding: 8px;
        }
    </style>
@endsection

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
                                        @foreach ($products as $prd)
                                        <a href="{{ getImage($prd['image']) }}" rel="lightbox[16]"><img fetchpriority="high" decoding="async" src="{{ getImage($prd['image']) }}" alt="{{ $prd["title_$language"] }}" width="476" height="1024" class="aligncenter size-large wp-image-147 lazyautosizes ls-is-cached lazyloaded">
                                            </a>
                                        @endforeach
                                    </div>
                                    <p class="news_btn"><a href="products/">{{ __("Product Introduction") }}</a></p>
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
                                </ul>
                                <p class="news_btn"><a href="#trengths">{{ __("Learn More") }}</a></p>
                            </section>
                        </article>

                        @include('components.social')

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
