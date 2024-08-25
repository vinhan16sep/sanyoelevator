@extends('layouts.app')

@section('meta_title', __("Check Product"))
@section('meta_keyword', __("Check Product"))
@section('meta_description', __("Check Product"))
<style>
    .check-product::placeholder  {
        font-weight: 500;
        color: #606060 !important;
    }
</style>

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-background-transparent-2.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">{{ __("Check Product") }}</h1>
                        <span class="sub-title">{{ __("Driving Innovation for a Brighter Tomorrow") }}</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">{{ __("Home") }}</a></li>
                            <li class="active">{{ __("Check Product") }}</li>
                        </ul>
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
                                <button type="submit" class="w-100 mb-2 btn btn-primary button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            @if (!empty($part) && !empty($part->part))
                <div class="row">
                    <div class="col">
                        <hr class="solid my-5">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="row products product-thumb-info-list lightbox" data-plugin-masonry  data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows', 'delegate': 'a.img-thumbnail', 'type': 'image', 'gallery': {'enabled': true}}">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1" href="{{ getImage($part->part->image) }}" >
                                <img class="img-fluid" src="{{ getImage($part->part->image) }}" alt="{{ $part->part->title }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 order-2">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{ $language == 'en' ? $part->part->title_en : $part->part->title_jp }}</h2>
                        </div>
                        
                        <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th scope="row">{{ __("Type") }}</th>
                                <td>{{ $part->part->type }}</td>
                              </tr>
                              @if ($part->part->load != "")
                              <tr>
                                <th scope="row">{{ __("Load") }}</th>
                                <td>{{ $part->part->load }}</td>
                              </tr>
                              @endif
                              @if ($part->part->speed != "")
                              <tr>
                                <th scope="row">{{ __("Speed") }}</th>
                                <td>{{ $part->part->speed }}</td>
                              </tr>
                              @endif
                              @if ($part->part->power != "")
                              <tr>
                                <th scope="row">{{ __("Power") }}</th>
                                <td>{{ $part->part->power }}</td>
                              </tr>
                              @endif
                              <tr>
                                <th scope="row">{{ __("Serial Number") }}</th>
                                <td>{{ $part->serial }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("CQ Number") }}</th>
                                <td>{{ $part->part->qc_number }}</td>
                              </tr>
                              <tr>
                                <th scope="row">{{ __("Inspection Date") }}</th>
                                <td>{{ $part->part->date }}</td>
                              </tr>
                            </tbody>
                        </table>
                        {!! nl2br($part->part->description) !!}
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

@section('script')
    <script src="{{ asset('js/examples/examples.lightboxes.js') }}"></script>
@endsection