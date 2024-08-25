@extends('layouts.app')

@section('meta_title', __("About Us"))
@section('meta_keyword', __("About Us"))
@section('meta_description', __("About Us"))

@section('content')
    <style>
        .about-text span,
        .about-text p,
        .about-text h2,
        .about-text h3 {
            background-color: inherit !important;
        }
    </style>
    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-about-us.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">{{ __("About Us") }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">{{ __("Home") }}</a></li>
                            <li class="active">{{ __("About Us") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-5">
                <div class="col">

                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                    <span>{{ __("Driving Innovation for a Brighter Tomorrow") }} </span>
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
            <div class="container">
                <div class="row counters counters-sm pb-4 pt-3">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-user text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="3000" data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{ __("Happy Clients") }}</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-badge text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="500" data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{ __("Products") }}</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <i class="icons icon-badge text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="10000" data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{ __("Projects") }}</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <i class="icons icon-map text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="10" data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{ __("Countries") }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
            <div class="container">
                <div class="row">
                    <div class="col about-text">
                        {!! $about["text_$language"] !!}
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row pt-5 pb-4 my-5">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
                    <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                            <p class="text-2 mb-0">CEO</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                            <p class="text-2 mb-0">CEO</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                            <p class="text-2 mb-0">DEVELOPER</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                            <p class="text-2 mb-0">SEO ANALYST</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                            <p class="text-2 mb-0">DESIGNER</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
                </div>
            </div>
        </div>

        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
            <div class="container pb-2">
                <div class="row">
                    <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                        <div class="row justify-content-center my-5">
                            <div class="col-8 text-center col-md-4">
                                <img src="img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4 my-3 my-md-0">
                                <img src="img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4">
                                <img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
@endsection
