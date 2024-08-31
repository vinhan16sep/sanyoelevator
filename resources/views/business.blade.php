@extends('layouts.app')

@section('body_class', 'page-template-default page page-id-16 cookies-set cookies-refused post-name-introduction post-type-page sidebar-fix sidebar-fix-priority-top bootstrap4 device-pc fa_v6_cs')

@section('active', 'introduction')

@section('content')

    @include('components.breadcrumb', ['title' => 'Business'])

    <div class="section siteContent">
        <div class="container">
            <div class="row">
                <div class="col mainSection mainSection-col-one" id="main" role="main">
                    <article id="post-525" class="entry entry-full post-525 page type-page status-publish has-post-thumbnail hentry wpautop">
                        <div class="entry-body">
                            <article>
                                <section class="fadein is-active">
                                    <h2 class="ttl_01">{{ __("Business Contents") }}</h2>
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
                                    <p>
                                        <img fetchpriority="high" decoding="async" src="{{ asset('assets/images/business_img.jpg') }}" alt="事業内容" width="1200" height="632" class="aligncenter size-full wp-image-537 lazyautosizes ls-is-cached lazyloaded">
                                        <br>
                                    </p>
                                </section>
                                <p>
                                    <a id="trengths" name="trengths"></a>
                                </p>
                                <section class="fadein is-active">
                                    <h2 class="ttl_01">{{ __("Our Strengths") }}</h2>
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
                                </section>
                            </article>

                            @include('components.social')

                        </div>
                    </article>
                    <!-- [ /#post-525 ] -->
                </div>
                <!-- [ /.mainSection ] -->
            </div>
            <!-- [ /.row ] -->
        </div>
        <!-- [ /.container ] -->
    </div>

@endsection
