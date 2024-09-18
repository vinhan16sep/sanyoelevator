@extends('layouts.app')

@section('meta_title', __("Contact Us"))
@section('meta_keyword', __("Contact Us"))
@section('meta_description', __("Contact Us"))

@section('content')

    @include('components.breadcrumb', ['title' => __("Contact Us")])

    <br>
    <div class="section siteContent">
        <div class="container">
            <div class="row">
                <div class="col mainSection mainSection-col-one" id="main" role="main">
                    <article id="post-20" class="entry entry-full post-20 page type-page status-publish has-post-thumbnail hentry wpautop">
                        <div class="entry-body">
                            <article>
                                <section class="fadein is-active">
                                    <div class="wpcf7 js" id="wpcf7-f6-p20-o1" lang="ja" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form init" aria-label="Contact" novalidate="novalidate" data-status="init">
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">

                                            <section>
                                                <p>
                                                    <img decoding="async" src="./assets/images/mfp_must.svg" alt="" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-src="./assets/images/mfp_must.svg" class=" lazyloaded" data-eio-rwidth="40" data-eio-rheight="21">
                                                    <noscript>
                                                        <img decoding="async" src="./assets/images/mfp_must.svg" alt="必須" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-eio="l" />
                                                    </noscript>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{ __("Company name, organization name") }}</font>
                                                    </font>
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap" data-name="company">
                                                     <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" value="" type="text" name="company">
                                                    </span>
                                                </p>
                                            </section>
                                            <section>
                                                <p>
                                                    <img decoding="async" src="./assets/images/mfp_must.svg" alt="" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-src="./assets/images/mfp_must.svg" class=" lazyloaded" data-eio-rwidth="40" data-eio-rheight="21">
                                                    <noscript>
                                                        <img decoding="async" src="./assets/images/mfp_must.svg" alt="必須" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-eio="l" />
                                                    </noscript>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{ __("Full name") }}</font>
                                                    </font>
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                     <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" value="" type="text" name="your-name">
                                                    </span>
                                                </p>
                                            </section>
                                            <section>
                                                <p>
                                                    <img decoding="async" src="./assets/images/icon_any.svg" alt="" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-src="./assets/images/icon_any.svg" class=" lazyloaded" data-eio-rwidth="40" data-eio-rheight="21">
                                                    <noscript>
                                                        <img decoding="async" src="./assets/images/icon_any.svg" alt="任意" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-eio="l" />
                                                    </noscript>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{ __("Telephone number") }}</font>
                                                    </font>
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap" data-name="tel-98">
                                                     <input size="13" maxlength="13" class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel form-control" aria-invalid="false" value="" type="tel" name="tel-98">
                                                    </span>
                                                </p>
                                            </section>
                                            <section>
                                                <fieldset style="text-align:left;">
                                                    <legend>
                                                        <img decoding="async" src="./assets/images/mfp_must.svg" alt="" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-src="./assets/images/mfp_must.svg" class=" lazyloaded" data-eio-rwidth="40" data-eio-rheight="21">
                                                        <noscript>
                                                            <img decoding="async" src="./assets/images/mfp_must.svg" alt="必須" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-eio="l" />
                                                        </noscript>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">{{ __("Email address") }} </font>
                                                        </font>
                                                    </legend>
                                                    <p>
                                                     <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                       <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" value="" type="email" name="your-email">
                                                     </span>
                                                    </p>
                                                    <p>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">{{ __("Re-enter your email address") }}</font>
                                                        </font>
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap" data-name="your-email_confirm">
                                                           <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="{{ __("Please enter it again to confirm") }}" value="" type="email" name="your-email_confirm">
                                                        </span>
                                                    </p>
                                                </fieldset>
                                            </section>
                                            <section>
                                                <p>
                                                    <img decoding="async" src="./assets/images/mfp_must.svg" alt="Request" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-src="./assets/images/mfp_must.svg" class=" ls-is-cached lazyloaded" data-eio-rwidth="40" data-eio-rheight="21">
                                                    <noscript>
                                                        <img decoding="async" src="./assets/images/mfp_must.svg" alt="必須" width="40px" height="21px" style="margin-right:5px; vertical-align: middle;" data-eio="l" />
                                                    </noscript>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{ __("Questions, requests, etc.") }}</font>
                                                    </font>
                                                    <br>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                     <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" name="your-message"></textarea>
                                                    </span>
                                                </p>
                                            </section>
                                            <section>
                                                <fieldset>
                                                    <legend>
                                                         <span style="color:#ff0000;">
                                                           <i class="fas fa-exclamation-triangle"></i>
                                                           <font style="vertical-align: inherit;">
                                                             <font style="vertical-align: inherit;">{{ __("Check!") }}</font>
                                                           </font>
                                                         </span>
                                                    </legend>
                                                    <p class="mt5 mb00">
                                                        <label>
                                                           <span class="wpcf7-form-control-wrap" data-name="acceptance-598">
                                                             <span class="wpcf7-form-control wpcf7-acceptance">
                                                               <span class="wpcf7-list-item">
                                                                 <input type="checkbox" name="acceptance-598" value="1" aria-invalid="false">
                                                               </span>
                                                             </span>
                                                           </span>
                                                        </label>
                                                        <span class="t_block">
                                                           <font style="vertical-align: inherit;">
                                                             <font style="vertical-align: inherit;">{{ __("If there are no errors in the above information, please check the box.") }}</font>
                                                           </font>
                                                         </span>
                                                    </p>
                                                </fieldset>
                                            </section>
                                            <section>
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            <input class="wpcf7-form-control wpcf7-submit has-spinner btn btn-primary" type="submit" value="{{ __("Send") }}" disabled="">
                                                        </font>
                                                    </font>
                                                    <span class="wpcf7-spinner"></span>
                                                </p>
                                            </section>
                                            <p style="display: none !important;" class="akismet-fields-container" data-prefix="_wpcf7_ak_">
                                                <label>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">∆</font>
                                                    </font>
                                                    <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100" class="form-control"></textarea>
                                                </label>
                                                <input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="1722953200853">
                                                <script>
                                                    document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                                                </script>
                                            </p>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </section>
                            </article>
                        </div>
                    </article>
                    <!-- [ /#post-20 ] -->
                </div>
                <!-- [ /.mainSection ] -->
            </div>
            <!-- [ /.row ] -->
        </div>
        <!-- [ /.container ] -->
    </div>
@endsection

@section('script')
    <script>
        $('[name=acceptance-598]').on('change', function() {
            if ($(this).prop('checked')) {
                $('input[type="submit"]').removeAttr('disabled')
            } else {
                $('input[type="submit"]').attr('disabled', true)
            }
        });
    </script>
@endsection
