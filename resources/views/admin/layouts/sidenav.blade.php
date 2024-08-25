
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo">
                    <a href="index.html"><span>Admin</span></a>
                </div>
                <li class="label">Main</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard </a></li>
                <li class="label">Configurations</li>
                <li><a href="{{ route('list-banner') }}"><i class="ti-image"></i>Banner</a></li>
                <li><a href="{{ route('list-information') }}"><i class="ti-info"></i>Information</a></li>
                <li><a href="{{ route('list-about') }}"><i class="ti-comments-smiley"></i>About</a></li>

                <li class="label">Apps</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-list"></i> Elevators <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('list-product-category') }}">Categories</a></li>
                        <li><a href="{{ route('list-product') }}">Elevators</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('list-part') }}"><i class="ti-list"></i>Parts</a></li>
                <li><a class="sidebar-sub-toggle"><i class="ti-list"></i> Projects <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('list-project-category') }}">Categories</a></li>
                        <li><a href="{{ route('list-project') }}">Projects</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->