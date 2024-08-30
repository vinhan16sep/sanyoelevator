@extends('layouts.app')

@section('body_class', 'page-template-default page page-id-16 cookies-set cookies-refused post-name-introduction post-type-page sidebar-fix sidebar-fix-priority-top bootstrap4 device-pc fa_v6_cs')

@section('active', 'introduction')

@section('content')

    @include('components.breadcrumb', ['title' => 'Product Introduction'])

    <div class="section siteContent" style="padding-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col mainSection mainSection-col-two baseSection vk_posts-mainSection" id="main" role="main">
                    <article id="post-16" class="entry entry-full post-16 page type-page status-publish has-post-thumbnail hentry no-wpautop">
                        <div class="entry-body">
                            <article>
                                @foreach ($productCates as $item)
                                <a id="{{ $item["slug"] }}"></a>
                                <section>
                                    <h2 class="ttl_01">{{ $item["title_$language"] }}</h2>
                                    <ul class="introduction">
                                        @foreach ($item['products'] as $prd)
                                        <li>
                                            <a href="{{ getImage($prd['image']) }}" rel="lightbox[16]"><img fetchpriority="high" decoding="async" src="{{ getImage($prd['image']) }}" alt="{{ $prd["title_$language"] }}" width="476" height="1024" class="aligncenter size-large wp-image-147 lazyautosizes ls-is-cached lazyloaded">
                                            </a>{{ $prd["title_$language"] }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </section>
                                @endforeach
                            </article>

                            @include('components.social')

                        </div>
                    </article><!-- [ /#post-16 ] -->
                </div><!-- [ /.mainSection ] -->

                <div class="col subSection sideSection sideSection-col-two baseSection" style="">
                    <aside class="widget_text widget widget_custom_html" id="custom_html-5">
                        <div class="textwidget custom-html-widget">
                            <nav>
                                <ul class="sidemenu">
                                    @foreach ($productCates as $item)
                                    <li>
                                        <a href="#{{ $item["slug"] }}">{{ $item["title_$language"] }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div><!-- [ /.subSection ] -->
            </div><!-- [ /.row ] -->
        </div><!-- [ /.container ] -->
    </div>
@endsection
