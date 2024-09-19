@extends('layouts.app')

@section('meta_title', __("Check Product"))
@section('meta_keyword', __("Check Product"))
@section('meta_description', __("Check Product"))


@section('content')
    @include('components.breadcrumb', ['title' => __("Check Product")])
    <div role="main" class="main box-check-product">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-background-transparent-2.jpg);background-size: cover;padding: 80px 0;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">{{ __("Check Product") }}</h1>
                        <span class="sub-title">{{ __("Driving Innovation for a Brighter Tomorrow") }}</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 order-2">
                    <h3 class="text-center text-info">{{ __("Check Product") }} </h3>
                    <form method="GET" action="{{ route("part") }}">
                        <input type="hidden" name="search" value=1>
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <input class="form-control mb-2 check-product" value="{{ request("secret") }}" name="secret" placeholder="{{ __("Security code") }}">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control mb-2 check-product" value="{{ request("serial") }}" name="serial" placeholder="{{ __("Serial number/model") }}">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="w-100 mb-2 btn btn-primary button-search">
                                    <svg style="fill: aliceblue;height: 24px;" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"/></svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if (!empty($part))
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div style="border: 1px solid #ccc;" class="products product-thumb-info-list lightbox" data-plugin-masonry  data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows', 'delegate': 'a.img-thumbnail', 'type': 'image', 'gallery': {'enabled': true}}">
                            <a href="{{ getImage("images/no-image-icon-23483.png") }}" rel="lightbox[16]"><img fetchpriority="high" decoding="async" src="{{ getImage("images/no-image-icon-23483.png") }}" alt="{{ "TITLE" }}" width="476" height="1024" class="aligncenter size-large wp-image-147 lazyautosizes ls-is-cached lazyloaded">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{ "TITLE"  }}</h2>
                        </div>

                        <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">{{ __("Type") }}</th>
                                <td>{{ "TYPE" }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("Load") }}</th>
                                <td>{{ "LOAD" }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("Speed") }}</th>
                                <td>{{ "SPEED" }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("Power") }}</th>
                                <td>{{ "POWER" }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("Serial Number") }}</th>
                                <td>{{ "SERIAL NUMBER" }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("CQ Number") }}</th>
                                <td>{{ "CQ NUMBER"  }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("Inspection Date") }}</th>
                                <td>{{ "INSPECTION DATE" }}</td>
                              </tr>
                            </tbody>
                        </table>
                        {!! nl2br("DESCRIPTION...") !!}
                        <div>
                            <hr class="solid my-5">
                        </div>
                        <div>
                            <img src="{{ getImage('img/color-desc.jpg') }}" style="width: 100%; height: 20%;">
                        </div>
                    </div>
                </div>
            @else
                @if (request('search') || request("secret") || request("serial"))
                    <br>
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="col-md-12 alert alert-danger" role="alert">
                                {{ __("You have not entered the security code. Please go back to enter the security code") }}
                            </div>
                        </div>
                    </div>
                @endif
                <br>
                <br>
                <br>
            @endif
            <br>
        </div>
    </div>
@endsection
