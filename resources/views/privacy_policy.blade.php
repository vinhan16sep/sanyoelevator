@extends('layouts.app')

@section('meta_title', __("Contact Us"))
@section('meta_keyword', __("Contact Us"))
@section('meta_description', __("Contact Us"))

@section('content')

@include('components.breadcrumb', ['title' => 'Privacy policy '])

<br>

<div class="section siteContent">
    <div class="container">
        <div class="row">
            <div class="col mainSection mainSection-col-one" id="main" role="main">
                <article id="post-3" class="entry entry-full post-3 page type-page status-publish has-post-thumbnail hentry wpautop">
                    <div class="entry-body">
                        <article>
                            {!! $privacyPolicy["privacy_policy_$language"] !!}
                        </article>
                    </div>
                </article><!-- [ /#post-3 ] -->
            </div><!-- [ /.mainSection ] -->
        </div><!-- [ /.row ] -->
    </div><!-- [ /.container ] -->
</div>

@endsection
