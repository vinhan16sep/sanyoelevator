<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-md-6 col-lg-3">
                <iframe src="{{ $contactInformations['google_map'] ?? "" }}" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">{{ __("Address") }}</h5>
                <p class="text-4 mb-0">{{ $contactInformations["address_$language"] }}</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">{{ __("Menu") }}</h5>
                <p class="text-4 mb-0"><a class="dropdown-item" href="/">{{ __("Home") }}</a></p>
                <p class="text-4 mb-0"><a class="dropdown-item" href="{{ route("about") }}">{{ __("About Us") }}</a></p>
                <p class="text-4 mb-0"><a class="dropdown-item" href="{{ route("products") }}">{{ __("Elevator and Escalator") }}</a></p>
                <p class="text-4 mb-0"><a class="dropdown-item" href="{{ route("productCategory", ["slug" => 'elevator-parts']) }}">{{ __('Elevator Parts') }}</a></p>
                <p class="text-4 mb-0"><a class="dropdown-item" href="{{ route("projects") }}">{{ __("Project") }}</a></p>
                <p class="text-4 mb-0"><a class="dropdown-item" href="{{ route("part") }}">{{ __("Check Product") }}</a></p>
                <p class="text-4 mb-0"><a class="dropdown-item" href="{{ route("contact") }}">{{ __("Contact") }}</a></p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">{{ __("Call Us Now") }}</h5>
                <p class="text-7 text-color-light font-weight-bold mb-2">
                    <a href="tel:012345679" class="text-decoration-none text-color-light">{{ $contactInformations["phone"] }}</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-copyright footer-copyright-style-2 pb-4">
            <div class="py-2">
                <div class="row py-4">
                    <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                        <p>{{ __("Copy right") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>