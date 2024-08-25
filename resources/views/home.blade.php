@extends('layouts.app')

@section('content')


<div role="main" class="main">
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']" style="height: 650px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                
                @foreach ($banners as $key => $banner)
                <div class="owl-item position-relative overflow-hidden">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToRight" data-appear-animation-duration="13s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url({{ $banner['image'] }}); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7">
                                <div class="d-flex flex-column align-items-center">
                                    <h2 style="text-shadow: 5px 5px 20px black;" class="text-color-light font-weight-extra-bold text-12-5 line-height-1 text-center mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">{{ $banner["title_$language"] }}</h2>
                                    <p style="text-shadow: 5px 5px 20px black;" class="text-4-5 text-color-light font-weight-light text-center mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">{{ $banner["description_$language"] }}</p>
                                    <a href="{{ $banner['link'] }}" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 mt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500" data-plugin-options="{'minWindowWidth': 0}">{{ __('See more') }} <i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
        <div class="owl-dots mb-5">
            @foreach ($banners as $key => $banner)
            <button role="button" class="owl-dot {{ $key == 0 ? 'active' : '' }}"><span></span></button>
            @endforeach
        </div>
    </div>
    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">

                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">{{ __("Who We Are") }}</h2>
                    {!! $homeAbout["home_text_$language"] !!}
                    <a href="{{ route('about') }}" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">{{ __("LEARN MORE") }}</a>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
                    <img src="img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="container section-custom">
        <div class="row py-1 my-5 mb-3">
            <div class="col-md-6">
                @foreach ($others as $key => $other)
                    @if ($key % 2 == 0)
                    <div class="row mb-3">
                        <div class="col-md-6 xs-order-1 text-right">
                            <h4>{{ $other["title_$language"] }}</h4>
                            <p>
                                {{ $other["description_$language"] }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ getImage($other['image']) }}" >
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach ($others as $key => $other)
                    @if ($key % 2 != 0)
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <img src="{{ getImage($other['image']) }}" >
                        </div>
                        <div class="col-md-6 xs-order-1">
                            <h4>{{ $other["title_$language"] }}</h4>
                            <p>
                                {{ $other["description_$language"] }}
                            </p>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
