@extends('layouts.app')

@section('meta_title', __("Elevator"))
@section('meta_keyword', __("Elevator"))
@section('meta_description', __("Elevator"))

@section('content')
    <div role="main" class="main shop pt-4">

        <div class="container product-list">

            <div class="masonry-loader masonry-loader-showing">
                <div class="row products product-thumb-info-list " data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                    @foreach ($products as $item)
                        @php
                            $route = route("products.show", ["slug" => $item->slug]);
                        @endphp
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="product mb-4">
                                <div class="product-thumb-info border-0 mb-2">
                                    <a href="{{ $route }}" class="d-inline-block img-thumbnail img-thumbnail-no-borders mb-1 me-1" >
                                        <img class="img-fluid" src="{{ getImage($item->image) }}" alt="Project Image">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $item->product_category["title_$language"] }}</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="{{ $route }}" class="text-color-dark text-color-hover-primary">{{ $item["title_$language"] }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col">
                        {!! $products->links("simple-bootstrap-4") !!}
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection

@section('script')
    <script src="{{ asset('js/examples/examples.lightboxes.js') }}"></script>
@endsection