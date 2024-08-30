<div class="section page-header" style="background-color: #002c50!important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header_pageTitle"> {{ $title }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="section breadSection">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li id="panHome" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{{ route('home') }}">
                          <span itemprop="name">
                            <svg style="position: relative; top: -2px;" xmlns="http://www.w3.org/2000/svg" width="1.27em" height="1em" viewBox="0 0 1664 1312"><path fill="currentColor" d="M1408 768v480q0 26-19 45t-45 19H960V928H704v384H320q-26 0-45-19t-19-45V768q0-1 .5-3t.5-3l575-474l575 474q1 2 1 6m223-69l-62 74q-8 9-21 11h-3q-13 0-21-7L832 200L140 777q-12 8-24 7q-13-2-21-11l-62-74q-8-10-7-23.5T37 654L756 55q32-26 76-26t76 26l244 204V64q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5"/></svg>
                            {{ __('HOME') }}
                          </span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li>
                    <span>{{ $title }}</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
    </div>
</div>
