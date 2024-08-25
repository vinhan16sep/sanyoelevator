@extends('layouts.app')

@section('meta_title', __("Contact Us"))
@section('meta_keyword', __("Contact Us"))
@section('meta_description', __("Contact Us"))

@section('content')
    <div role="main" class="main">

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">{{ __('Contact Us') }}</h2>
                    <p class="mb-4">{{ __("Feel free to ask for details, dont save any questions!") }}</p>

                    <form class="contact-form" action="{{ route("contact.store") }}" method="POST" id="contact">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">{{ __('Full Name') }}</label>
                                <input type="text" value="" data-msg-required="{{ __("Please enter your first and last name") }}" maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">{{ __('Email Address') }}</label>
                                <input type="email" value="" data-msg-required="{{ __("Please enter email address") }}." data-msg-email="{{ __("Please enter a valid email address") }}." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">{{ __('Subject') }}</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">{{ __('Message') }}</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="{{ __('Send Message') }}" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">{{ __('Our') }} <strong>{{ __('Office') }}</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">{{ __('Address') }}:</strong> {{ $contactInformations["address_$language"] }}</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">{{ __('Phone') }}:</strong> {{ $contactInformations["phone"] }}</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">{{ __('Email') }}:</strong> <a href="mailto:{{ $contactInformations["email"] }}">{{ $contactInformations["email"] }}</a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('script')
@endsection