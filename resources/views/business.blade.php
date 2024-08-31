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
                                    <h2 class="ttl_01">Nội dung kinh doanh</h2>
                                    <ul class="business">
                                        <li>
                                            <div class="circle">
                                                <p>procurement <br>and sales </p>
                                                <h4>thu mua và bán hàng</h4>
                                            </div>
                                            <p class="explanation">Chúng tôi cung cấp máy móc chất lượng cao nhất từ ​​khắp nơi trên thế giới và bán cho thị trường trong nước và quốc tế. Chúng tôi cung cấp máy móc với công nghệ mới nhất và độ tin cậy cao cho nhiều ngành công nghiệp.</p>
                                        </li>
                                        <li>
                                            <div class="circle">
                                                <p>customized <br>solution </p>
                                                <h4>giải pháp  <br>tùy chỉnh </h4>
                                            </div>
                                            <p class="explanation">Chúng tôi cung cấp các giải pháp cơ khí tùy chỉnh để phù hợp với nhu cầu và yêu cầu của bạn. Chúng tôi linh hoạt và điều chỉnh các tính năng cũng như thông số kỹ thuật của máy để cung cấp sản phẩm tốt nhất cho doanh nghiệp của bạn.</p>
                                        </li>
                                        <li>
                                            <div class="circle">
                                                <p>technical <br>support </p>
                                                <h4>hỗ trợ kỹ thuật</h4>
                                            </div>
                                            <p class="explanation">Chúng tôi cung cấp hỗ trợ kỹ thuật và đào tạo từ lắp đặt máy đến vận hành. Các kỹ sư giàu kinh nghiệm của chúng tôi sẽ hỗ trợ bạn và đào tạo về vận hành và bảo trì máy.</p>
                                        </li>
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
                                    <h2 class="ttl_01">điểm mạnh của chúng tôi</h2>
                                    <ul class="trengths">
                                        <li>
                                            <p>
                                                <img decoding="async" src="{{ asset('assets/images/trengths_01.jpg') }}" alt="品質管理と信頼性" width="500" height="333" class="aligncenter size-full wp-image-542 lazyautosizes ls-is-cached lazyloaded" >
                                            </p>
                                            <h4>Kiểm soát chất lượng và độ tin cậy</h4>
                                            <p>Chúng tôi có một đội ngũ chuyên gia giàu kinh nghiệm có thể cung cấp hỗ trợ kỹ thuật và đào tạo. Chúng tôi luôn có hệ thống hỗ trợ để giúp khách hàng sử dụng sản phẩm của chúng tôi một cách hiệu quả.</p>
                                        </li>
                                        <li>
                                            <p>
                                                <img decoding="async" src="{{ asset('assets/images/trengths_02.jpg') }}" alt="専門知識とサポート" width="500" height="333" class="aligncenter size-full wp-image-543 lazyautosizes ls-is-cached lazyloaded">
                                            </p>
                                            <h4>Chuyên môn và hỗ trợ</h4>
                                            <p>Chúng tôi có các tiêu chuẩn kiểm soát chất lượng nghiêm ngặt và duy trì các tiêu chuẩn cao về chất lượng và độ tin cậy của sản phẩm. Chúng tôi thực hiện các biện pháp kỹ lưỡng để đảm bảo chất lượng để khách hàng có thể yên tâm sử dụng sản phẩm của chúng tôi.</p>
                                        </li>
                                        <li>
                                            <p>
                                                <img decoding="async" src="{{ asset('assets/images/trengths_03.jpg') }}" alt="グローバルな展開とロジスティクス" width="500" height="333" class="aligncenter size-full wp-image-548 lazyautosizes ls-is-cached lazyloaded" >
                                            </p>
                                            <h4>Mở rộng toàn cầu và hậu cần</h4>
                                            <p>Tận dụng mạng lưới quốc tế và kinh nghiệm sâu rộng, chúng tôi cung cấp dịch vụ hậu cần để xuất khẩu sản phẩm trên toàn thế giới. Chúng tôi giúp bạn mở rộng hoạt động kinh doanh của mình trên toàn cầu bằng cách đảm bảo giao hàng nhanh chóng và hiệu quả.</p>
                                        </li>
                                        <li>
                                            <p>
                                                <img decoding="async" src="{{ asset('assets/images/trengths_04.jpg') }}" alt="アフターケアと保守サービス" width="500" height="333" class="aligncenter size-full wp-image-545 lazyautosizes ls-is-cached lazyloaded" >
                                            </p>
                                            <h4>Dịch vụ chăm sóc và bảo trì sau</h4>
                                            <p>Chúng tôi cung cấp dịch vụ bảo trì và chăm sóc sau bán hàng lâu dài sau khi sản phẩm được mua. Chúng tôi cung cấp hỗ trợ để đảm bảo rằng máy móc của bạn luôn hoạt động trong tình trạng tối ưu, bao gồm kiểm tra, bảo trì và sửa chữa thường xuyên.</p>
                                        </li>
                                        <li>
                                            <p>
                                                <img decoding="async" src="{{ asset('assets/images/trengths_05.jpg') }}" alt="イノベーションと継続的な改善" width="500" height="333" class="aligncenter size-full wp-image-546 lazyautosizes ls-is-cached lazyloaded" >
                                            </p>
                                            <h4>Đổi mới và cải tiến liên tục</h4>
                                            <p>Chúng tôi không ngừng đổi mới và cung cấp các sản phẩm kết hợp công nghệ và xu hướng mới nhất. Chúng tôi cũng sử dụng phản hồi của khách hàng để cải thiện sản phẩm của mình và cung cấp nhiều giá trị hơn cho khách hàng.</p>
                                        </li>
                                        <li></li>
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
