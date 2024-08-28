@extends('layouts.app')

@section('content')


<div id="top__fullcarousel" data-interval="4000" class="carousel slide slide-main" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item item item-1 active">
            <picture>
                <source media="(max-width: 767px)" data-srcset="{{ asset('assets/images/top_01_sp.jpg') }}" srcset="{{ asset('assets/images/top_01_sp.jpg') }}">
                <img src="{{ asset('assets/images/top_01.jpg') }}" alt="" class="slide-item-img d-block w-100 lazyloaded" data-src="{{ asset('assets/images/top_01.jpg') }}" decoding="async" data-eio-rwidth="1920" data-eio-rheight="600">
            </picture>
            <div class="slide-text-set mini-content">
                <div class="mini-content-container-1 container" style="text-align:left"></div>
            </div>
            <!-- .mini-content -->
        </div>
        <!-- [ /.item ] -->
    </div>
    <!-- [ /.carousel-inner ] -->
</div>
<!-- [ /#top__fullcarousel ] -->


<div class="section siteContent">
    <div class="container">
        <div class="row">
            <div class="col mainSection mainSection-col-one">
                <article id="post-11" class="post-11 page type-page status-publish has-post-thumbnail hentry wpautop">
                    <div class="entry-body">
                        <article>
                            <section class="fadein is-active">
                                <div class="triangle_box">
                                    <p class="intro">Nippon Sanyo Lift Associate Co., Ltd., với tư cách là cầu nối giữa Nhật Bản và thế giới, là một công ty hướng tới mục tiêu cùng thế giới cùng tạo ra lợi ích chung bằng cách tận dụng kiến ​​thức và kinh nghiệm được trau dồi ở Nhật Bản để mang lại hạnh phúc cho người dân thông qua thang máy. <br>Các chuyên gia từ nhiều lĩnh vực khác nhau sẽ tập hợp để giao tiếp với thế giới từ Toyama và đề xuất lối sống phù hợp cho thời gian tới.</p>
                                </div>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">Tin tức</h1>
                                <p class="title_sub">News</p>
                                <div class="wide_notice_box">
                                    <div class="notice_box">
                                        <dl class="notice_list"></dl>
                                    </div>
                                </div>
                                <p class="news_btn"><a href="#">Tin tức</a></p>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">Đội hình thang máy</h1>
                                <p class="title_sub">Elevator lineup</p>
                                <div class="top_slider_box">
                                    <div class="slick_slider slick-slider">
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                        <img src="{{ asset('assets/images/passenger_elevator_29_slider-475x1024.jpg') }}" />
                                    </div>
                                    <p class="news_btn"><a href="introduction/">San Pham</a></p>
                                </div>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">{{ __("Business Contents") }}</h1>
                                <p class="title_sub">{{ __("Business details") }}</p>
                                <ul class="business">
                                    <li>
                                        <div class="circle">
                                            <p>procurement<br>and sales</p>
                                            <h4>Thu mua và bán hàng</h4>
                                        </div>
                                        <p class="explanation">Chúng tôi cung cấp máy móc chất lượng cao nhất từ ​​khắp nơi trên thế giới và bán cho thị trường trong nước và quốc tế. Chúng tôi cung cấp máy móc với công nghệ mới nhất và độ tin cậy cao cho nhiều ngành công nghiệp.</p>
                                    </li>
                                    <li>
                                        <div class="circle">
                                            <p>customized<br>solution</p>
                                            <h4>Giải pháp<br>tùy chỉnh</h4>
                                        </div>
                                        <p class="explanation">Chúng tôi cung cấp các giải pháp cơ khí tùy chỉnh để phù hợp với nhu cầu và yêu cầu của bạn. Chúng tôi linh hoạt và điều chỉnh các tính năng cũng như thông số kỹ thuật của máy để cung cấp sản phẩm tốt nhất cho doanh nghiệp của bạn.</p>
                                    </li>
                                    <li>
                                        <div class="circle">
                                            <p>technical<br>support</p>
                                            <h4>Hỗ trợ kỹ thuật</h4>
                                        </div>
                                        <p class="explanation">Chúng tôi cung cấp hỗ trợ kỹ thuật và đào tạo từ lắp đặt máy đến vận hành. Các kỹ sư giàu kinh nghiệm của chúng tôi sẽ hỗ trợ bạn và đào tạo về vận hành và bảo trì máy.</p>
                                    </li>
                                </ul>
                                <p class="news_btn"><a href="">Chi tiết</a></p>
                            </section>
                            <section class="fadein">
                                <h1 class="text_c">Đội hình thang máy</h1>
                                <p class="title_sub">Elevator lineup</p>
                                <ul class="trengths">
                                    <li>
                                        <p><img decoding="async" src="{{ asset('assets/images/trengths_01.jpg') }}" alt="品質管理と信頼性" width="500" height="333" class="aligncenter size-full wp-image-542 lazyautosizes lazyloaded" data-src="{{ asset('assets/images/trengths_01.jpg') }}" data-srcset="{{ asset('assets/images/trengths_01.jpg') }} 500w, {{ asset('assets/images/trengths_01-300x200.jpg') }} 300w" data-sizes="auto" data-eio-rwidth="500" data-eio-rheight="333" sizes="344px" srcset="{{ asset('assets/images/trengths_01.jpg') }} 500w, {{ asset('assets/images/trengths_01-300x200.jpg') }} 300w">
                                        </p>
                                        <h4>Kiểm soát chất lượng và độ tin cậy</h4>
                                        <p>Chúng tôi có các tiêu chuẩn kiểm soát chất lượng nghiêm ngặt và duy trì các tiêu chuẩn cao về chất lượng và độ tin cậy của sản phẩm. Chúng tôi thực hiện các biện pháp kỹ lưỡng để đảm bảo chất lượng để khách hàng có thể yên tâm sử dụng sản phẩm của chúng tôi.</p>
                                    </li>
                                    <li>
                                        <p><img decoding="async" src="{{ asset('assets/images/trengths_02.jpg') }}" alt="専門知識とサポート" width="500" height="333" class="aligncenter size-full wp-image-543 lazyautosizes lazyloaded" data-src="{{ asset('assets/images/trengths_02.jpg') }}" data-srcset="{{ asset('assets/images/trengths_02.jpg') }} 500w, {{ asset('assets/images/trengths_02-300x200.jpg') }} 300w" data-sizes="auto" data-eio-rwidth="500" data-eio-rheight="333" sizes="344px" srcset="{{ asset('assets/images/trengths_02.jpg') }} 500w, {{ asset('assets/images/trengths_02-300x200.jpg') }} 300w">
                                        </p>
                                        <h4>Chuyên môn và hỗ trợ</h4>
                                        <p>Chúng tôi có một đội ngũ chuyên gia giàu kinh nghiệm có thể cung cấp hỗ trợ kỹ thuật và đào tạo. Chúng tôi luôn có hệ thống hỗ trợ để giúp khách hàng sử dụng sản phẩm của chúng tôi một cách hiệu quả.</p>
                                    </li>
                                    <li>
                                        <p><img decoding="async" src="{{ asset('assets/images/trengths_03.jpg') }}" alt="グローバルな展開とロジスティクス" width="500" height="333" class="aligncenter size-full wp-image-548 lazyautosizes lazyloaded" data-src="{{ asset('assets/images/trengths_03.jpg') }}" data-srcset="{{ asset('assets/images/trengths_03.jpg') }} 500w, {{ asset('assets/images/trengths_03-300x200.jpg') }} 300w" data-sizes="auto" data-eio-rwidth="500" data-eio-rheight="333" sizes="344px" srcset="{{ asset('assets/images/trengths_03.jpg') }} 500w, {{ asset('assets/images/trengths_03-300x200.jpg') }} 300w">
                                        </p>
                                        <h4>Mở rộng toàn cầu và hậu cần</h4>
                                        <p>Tận dụng mạng lưới quốc tế và kinh nghiệm sâu rộng, chúng tôi cung cấp dịch vụ hậu cần để xuất khẩu sản phẩm trên toàn thế giới. Chúng tôi giúp bạn mở rộng hoạt động kinh doanh của mình trên toàn cầu bằng cách đảm bảo giao hàng nhanh chóng và hiệu quả.</p>
                                    </li>
                                    <li>
                                        <p><img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAFNAQAAAADeaKCaAAAAAnRSTlMAAHaTzTgAAAAsSURBVHja7cExAQAAAMKg9U9tDQ+gAAAAAAAAAAAAAAAAAAAAAAAAAADg1wBTQAABFcJ66QAAAABJRU5ErkJggg==" alt="アフターケアと保守サービス" width="500" height="333" class="aligncenter size-full wp-image-545 lazyload" data-src="{{ asset('assets/images/trengths_04.jpg') }}" data-srcset="{{ asset('assets/images/trengths_04.jpg') }} 500w, {{ asset('assets/images/trengths_04-300x200.jpg') }} 300w" data-sizes="auto" data-eio-rwidth="500" data-eio-rheight="333">
                                        </p>
                                        <h4>Dịch vụ chăm sóc và bảo trì sau</h4>
                                        <p>Chúng tôi cung cấp dịch vụ bảo trì và chăm sóc sau bán hàng lâu dài sau khi sản phẩm được mua. Chúng tôi cung cấp hỗ trợ để đảm bảo rằng máy móc của bạn luôn hoạt động trong tình trạng tối ưu, bao gồm kiểm tra, bảo trì và sửa chữa thường xuyên.</p>
                                    </li>
                                    <li>
                                        <p><img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAFNAQAAAADeaKCaAAAAAnRSTlMAAHaTzTgAAAAsSURBVHja7cExAQAAAMKg9U9tDQ+gAAAAAAAAAAAAAAAAAAAAAAAAAADg1wBTQAABFcJ66QAAAABJRU5ErkJggg==" alt="イノベーションと継続的な改善" width="500" height="333" class="aligncenter size-full wp-image-546 lazyload" data-src="{{ asset('assets/images/trengths_05.jpg') }}" data-srcset="{{ asset('assets/images/trengths_05.jpg') }} 500w, {{ asset('assets/images/trengths_05-300x200.jpg') }} 300w" data-sizes="auto" data-eio-rwidth="500" data-eio-rheight="333">
                                        </p>
                                        <h4>Đổi mới và cải tiến liên tục</h4>
                                        <p>Chúng tôi luôn cam kết đổi mới và cung cấp các sản phẩm kết hợp công nghệ và xu hướng mới nhất. Chúng tôi cũng sử dụng phản hồi của khách hàng để cải thiện sản phẩm của mình và cung cấp nhiều giá trị hơn cho khách hàng.</p>
                                    </li>
                                    <li></li>
                                </ul>
                                <p class="news_btn"><a href="#trengths">Chi tiết</a></p>
                            </section>
                        </article>


                        <div class="addtoany_share_save_container addtoany_content addtoany_content_bottom">
                            <div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="" data-a2a-title="HOME" style="line-height: 32px;">
                                <a class="a2a_button_facebook" href="#" title="Facebook" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(8, 102, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path></svg></span><span class="a2a_label"></span></a>

                                <a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a10 10 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.7 9.7 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.94 4.94 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a5 5 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174q-.476-.001-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.9 9.9 0 0 1-6.114 2.107q-.597 0-1.175-.068a13.95 13.95 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013q0-.32-.015-.637c.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label"></span></a>

                                <a class="a2a_button_line" href="/#line" title="Line" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default a2a_s_line" style="background-color: rgb(0, 195, 0);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 14.304c0-5.37-5.384-9.738-12-9.738S4 8.936 4 14.304c0 4.814 4.27 8.846 10.035 9.608.39.084.923.258 1.058.592.122.303.08.778.04 1.084l-.172 1.028c-.05.303-.24 1.187 1.04.647s6.91-4.07 9.43-6.968c1.74-1.905 2.57-3.842 2.57-5.99zM11.302 17.5H8.918a.63.63 0 0 1-.63-.63V12.1a.63.63 0 0 1 1.26.002v4.14h1.754c.35 0 .63.28.63.628a.63.63 0 0 1-.63.63m2.467-.63a.63.63 0 0 1-.63.628.63.63 0 0 1-.63-.63V12.1a.63.63 0 1 1 1.26 0zm5.74 0a.632.632 0 0 1-1.137.378l-2.443-3.33v2.95a.631.631 0 0 1-1.26 0V12.1a.634.634 0 0 1 .63-.63.63.63 0 0 1 .504.252l2.444 3.328V12.1a.63.63 0 0 1 1.26 0v4.77zm3.853-3.014a.63.63 0 1 1 0 1.258H21.61v1.126h1.755a.63.63 0 1 1 0 1.258H20.98a.63.63 0 0 1-.628-.63V12.1a.63.63 0 0 1 .63-.628h2.384a.63.63 0 0 1 0 1.258h-1.754v1.126h1.754z"></path></svg></span><span class="a2a_label"></span></a>
                            </div>
                        </div>


                    </div>
                </article>
                <!-- [ /#post-11 ] -->
            </div>
            <!-- [ /.mainSection ] -->
        </div>
        <!-- [ /.row ] -->
    </div>
    <!-- [ /.container ] -->
</div>
<!-- [ /.siteContent ] -->


@endsection
