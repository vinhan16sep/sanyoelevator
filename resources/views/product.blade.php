@extends('layouts.app')

@section('meta_title', $product["title_$language"])
@section('meta_keyword', $product["title_$language"])
@section('meta_description', $product["title_$language"])

@section('content')
    <div role="main" class="main shop pt-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
                        <li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">
                            {{ __("Home") }}
                        </a></li>
                        <li> {{ $product->product_category["title_$language"] }} </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-5 mb-md-0">
                    <div class="thumb-gallery-wrapper">
                        <img alt="" class="img-fluid" src="{{ getImage($product->image) }}" data-zoom-image="img/products/product-grey-7.jpg">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="summary entry-summary position-relative">
                        <h1 class="mb-0 font-weight-bold text-7">{{ $product["title_$language"] }}</h1>
                        <p>
                            {!! nl2br($product["description_$language"]) !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-bs-toggle="tab"> {{ __("Specifications") }} </a></li>
                        </ul>
                        <div class="tab-content p-0">
                            <div class="tab-pane px-0 py-3 active" id="productDescription">
                                {!! $product["content_$language"] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @if($products->isNotEmpty())
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-semibold text-4 mb-3">{{ __("RELATED PRODUCTS") }}</h4>
                        <hr class="mt-0">
                        <div class="products row">
                            <div class="col">
                                <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">
                                    @foreach ($products as $item)
                                        @php
                                            $route = route("products.show", ["slug" => $item->slug]);
                                        @endphp
                                        <div class="product mb-0">
                                            <div class="product-thumb-info border-0 mb-3">
                                                <a href="{{ $route }}">
                                                    <div class="product-thumb-info-image">
                                                        <img alt="" class="img-fluid" src="{{ getImage($item->image) }}">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <a class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $item->product_category["title_$language"] }}</a>
                                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{ $route }}" class="text-color-dark text-color-hover-primary">{{ $item["title_$language"] }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <hr class="my-5">
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/examples/examples.gallery.js') }}"></script>	
@endsection
