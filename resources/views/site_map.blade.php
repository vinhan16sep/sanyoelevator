@extends('layouts.app')

@section('meta_title', __("Contact Us"))
@section('meta_keyword', __("Contact Us"))
@section('meta_description', __("Contact Us"))

@section('css')
    <style>
        ul.wsp-pages-list li:before, ul.wsp-posts-list li:before {
            content: url({{ asset('assets/fonts/item.svg') }});
            width: 8px;
            position: relative;
            top: -2px;
            color: blue;
            margin-right: 2px;
            filter: brightness(0) saturate(100%) invert(18%) sepia(84%) saturate(7216%) hue-rotate(242deg) brightness(90%) contrast(89%);
        }
    </style>
@endsection

@section('content')

    @include('components.breadcrumb', ['title' => 'Site map'])

    <br>

    <div class="section siteContent">
    <div class="container">
        <div class="row">

            <div class="col mainSection mainSection-col-one" id="main" role="main">
                <article id="post-116" class="entry entry-full post-116 page type-page status-publish has-post-thumbnail hentry wpautop">
                    <div class="entry-body">
                        <article>
                            <section class="fadein is-active">
                                <ul class="sitemap">
                                    <li>
                                        <h2 class="ttl_01"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chu</font></font></h2>
                                        <div class="wsp-container"><h2 class="wsp-pages-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chu</font></font></h2>
                                            <ul class="wsp-pages-list">
                                                <li class="page_item page-item-11">
                                                    <a href="{{ route("home") }}">
                                                        TRANG CHỦ
                                                    </a>
                                                </li>
                                                <li class="page_item page-item-16">
                                                    <a href="{{ route("products") }}">
                                                        Giơi thiệu sản phẩm
                                                    </a>
                                                </li>
                                                <li class="page_item page-item-14">
                                                    <a href="{{ route("about") }}">
                                                        Hồ sơ công ty
                                                    </a>
                                                </li>
                                                <li class="page_item page-item-525">
                                                    <a href="{{ route("business") }}">
                                                        Chi tiết doanh nghiệp
                                                    </a>
                                                </li>
                                                <li class="page_item page-item-20">
                                                    <a href="{{ route("contact") }}">
                                                        điều tra
                                                    </a>
                                                </li>
                                                <li class="page_item page-item-116 current_page_item">
                                                    <a href="{{ route("site_map") }}">
                                                        {{ __("Sitemap") }}
                                                    </a>
                                                </li>
                                                <li class="page_item page-item-3">
                                                    <a href="{{ route("privacy_policy") }}">
                                                        {{ __("Privacy Policy") }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="ttl_01"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tin tức</font></font></h2>
                                        <div class="wsp-container"></div>
                                    </li>
                                </ul>
                            </section>
                        </article>
                    </div>













                </article><!-- [ /#post-116 ] -->
            </div><!-- [ /.mainSection ] -->



        </div><!-- [ /.row ] -->
    </div><!-- [ /.container ] -->
</div>

@endsection
