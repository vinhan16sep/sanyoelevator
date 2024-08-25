@extends('layouts.app')

@section('meta_title', __("Project"))
@section('meta_keyword', __("Project"))
@section('meta_description', __("Project"))

@section('content')
    <div role="main" class="main shop pt-4">

        <div class="container project-list">

            <div class="row">
                <div class="col-lg-12">

                    <div class="masonry-loader masonry-loader-showing">
                        <div class="row products product-thumb-info-list lightbox" data-plugin-masonry  data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows', 'delegate': 'a.img-thumbnail', 'type': 'image', 'gallery': {'enabled': true}}">
                            @foreach ($projects as $item)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product mb-4">
                                        <div class="product-thumb-info border-0 mb-2">
                                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1" href="{{ getImage($item->image) }}" title="{{ $item["title_$language"] }}">
                                                <img class="img-fluid" src="{{ getImage($item->image) }}" alt="{{ $item["title_$language"] }}">
                                            </a>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $item->project_category["title_$language"] }}</a>
                                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">{{ $item["title_$language"] }}</a></h3>
                                            </div>
                                        </div>
                                        <div title="Rated 5 out of 5">
                                            <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                {!! $projects->links("simple-bootstrap-4") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="{{ asset('js/examples/examples.lightboxes.js') }}"></script>
@endsection