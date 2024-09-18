@extends('layouts.app')

@section('body_class', 'home page-template-default page page-id-11 post-name-home post-type-page bootstrap4 fa_v6_css device-pc cookies-not-set')

@section('active', 'introduction')

@section('content')

@include('components.breadcrumb', ['title' => __("About Us")])
<br>
<div class="section siteContent">
    <div class="container">
        <div class="row">
            <div class="col mainSection mainSection-col-one" id="main" role="main">
                <article id="post-14" class="entry entry-full post-14 page type-page status-publish has-post-thumbnail hentry no-wpautop">
                    <div class="entry-body">
                        <article>
                            <section class="fadein is-active">
                                <h2 class="ttl_01"> {{ __("Message from the President") }} </h2>
                                <p>
                                    <img fetchpriority="high" decoding="async" src="./assets/images/about_us_boss.jpg" alt="社長あいさつ" width="420" height="538" class="alignleft size-full wp-image-584 lazyautosizes lazyloaded">
                                </p>
                                <p>TEST ABC</p>
                                <p>　On October 25, 2019, Natural Humans was founded. Fast forward to January 2024, and a new chapter began with the rebranding to Nippon Sanyo Lift Associate.

                                    At Nippon Sanyo Lift Associate, we pride ourselves on offering cutting-edge products backed by the latest technologies and a team of seasoned professionals with diverse perspectives. Our aim extends beyond borders as we aspire to broaden our sales reach to encompass countries and regions beyond Japan.

                                    Our mission is clear: to contribute to the creation of a sustainable society that prioritizes safety, security, and comfort, all while delivering value from the user’s perspective. Embracing the ethos of continual improvement, we recognize the need to adapt to evolving paradigms in an era of perpetual change.

                                    Flexibility and resilience are paramount in our pursuit to be a company that swiftly responds to the dynamic landscape of business. By amalgamating our expertise, technologies, and systems across various domains, we position ourselves as a pivotal force in catalyzing customer innovation across borders and industries.

                                    United as a team, we are committed to realizing our management objectives. Our dedication extends beyond our products; we vow to uphold our commitment to customer safety and peace of mind, fostering enduring relationships within the communities we serve. </p>
                                <p style="text-align:right;">Ac AVB </p>
                                <p class="clear"></p>
                            </section>
                            <section class="fadein is-active">
                                <p>
                                    <span class="notranslate">On October 25, 2019, Natural Humans was founded. Fast forward to January 2024, and a new chapter began with the rebranding to Nippon Sanyo Lift Associate.</span>
                                </p>
                                <p>
                                    <span class="notranslate">At Nippon Sanyo Lift Associate, we pride ourselves on offering cutting-edge products backed by the latest technologies and a team of seasoned professionals with diverse perspectives. Our aim extends beyond borders as we aspire to broaden our sales reach to encompass countries and regions beyond Japan.</span>
                                </p>
                                <p>
                                    <span class="notranslate">Our mission is clear: to contribute to the creation of a sustainable society that prioritizes safety, security, and comfort, all while delivering value from the user’s perspective. Embracing the ethos of continual improvement, we recognize the need to adapt to evolving paradigms in an era of perpetual change.</span>
                                </p>
                                <p>
                                    <span class="notranslate">Flexibility and resilience are paramount in our pursuit to be a company that swiftly responds to the dynamic landscape of business. By amalgamating our expertise, technologies, and systems across various domains, we position ourselves as a pivotal force in catalyzing customer innovation across borders and industries.</span>
                                </p>
                                <p>
                                    <span class="notranslate">United as a team, we are committed to realizing our management objectives. Our dedication extends beyond our products; we vow to uphold our commitment to customer safety and peace of mind, fostering enduring relationships within the communities we serve.</span>
                                </p>
                                <p style="text-align:right;">Giám đốc đại diện và Chủ tịch </p>
                            </section>
                            <section class="fadein is-active">
                                <h2 class="ttl_01">
                                    {{ __("Company Profile") }}</h2>
                                <table class="about">
                                    <tbody>
                                    <tr>
                                        <th>{{ __("Company Name") }}</th>
                                        <td>{{ $informations["company_name_$language"] }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __("Location") }}</th>
                                        <td>{{ $informations["address_$language"] }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __("Representative") }}</th>
                                        <td>
                                            {{ $informations["representative_$language"] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>{{ __("Established date") }}</th>
                                        <td>{{ $informations["established_date_$language"] }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ __("Business Contents") }}</th>
                                        <td>{{ $informations["business_contents_$language"] }}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>
                                            <a href="mailto:{{ $informations["email"] }}">{{ $informations["email"] }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>URL</th>
                                        <td>
                                            <a href="{{ $informations["site_url"] }}">{{ $informations["site_url"] }}</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="fadein is-active">
                                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{{ $informations["google_map"] }}"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
                            </section>
                        </article>

                        @include('components.social')

                    </div>

                </article>
                <!-- [ /#post-14 ] -->
            </div>
            <!-- [ /.mainSection ] -->
        </div>
        <!-- [ /.row ] -->
    </div>
    <!-- [ /.container ] -->
</div>


@endsection
