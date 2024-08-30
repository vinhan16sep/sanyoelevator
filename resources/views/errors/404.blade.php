@extends('layouts.app')

@section('content')
    @include('components.breadcrumb', ['title' => 'Khong tim thay trang'])

    <br>
    <div class="section siteContent">
        <div class="container">
            <div class="row">
                <div class="col mainSection mainSection-col-two baseSection vk_posts-mainSection" id="main" role="main">
                    <div class="postList">
                        <div class="well"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="">Khong tim thay trang.</font></font></p></div>
                    </div><!-- [ /.postList ] -->
                </div><!-- [ /.mainSection ] -->
                <div class="col subSection sideSection sideSection-col-two baseSection">
                </div><!-- [ /.subSection ] -->
            </div><!-- [ /.row ] -->
        </div><!-- [ /.container ] -->
    </div>
@endsection
