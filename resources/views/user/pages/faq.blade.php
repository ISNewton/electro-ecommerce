@extends('user.layout.main')


@section('content')

<div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>FAQ</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry" >

                                <header class="entry-header">
                                    <h1 itemprop="name" class="entry-title">Frequently Asked Questions</h1>
                                    <p class="entry-subtitle">This Agreement was last modified on 18th february 2016</p>
                                </header><!-- .entry-header -->

                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper"><h2 class="vc_custom_heading faq-page-title" style="font-size: 25px;color: #434343;text-align: left;font-family:Open Sans;font-weight:400;font-style:normal">Shipping Information</h2></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid inner-bottom-xs" style="display: inline-block;">
                                        <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h3 style="text-align: left;" class="faq-title">What Shipping Methods Are Available?</h3>
                                                            <div class="text-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sapien lorem, consectetur et turpis id, blandit interdum metus. Morbi sed ligula id elit mollis efficitur ut nec ligula. Proin erat magna, pellentesque at elementum at, eleifend a tortor.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h3 class="faq-title">How Long Will it Take To Get My Package?</h3>
                                                            <div class="text-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sapien lorem, consectetur et turpis id, blandit interdum metus. Morbi sed ligula id elit mollis efficitur ut nec ligula. Proin erat magna, pellentesque at elementum at, eleifend a tortor.</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid inner-bottom" style="display: inline-block;">
                                        <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h3 class="faq-title">How Do I Track My Order?</h3>
                                                            <div class="text-content">
                                                                <p>Integer ex turpis, venenatis vitae nibh vel, vestibulum maximus quam. Ut pretium orci ac vestibulum porttitor. Fusce tempus diam quis justo porttitor gravida.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h3 class="faq-title">Do I Need A Account To Place Order?</h3>
                                                            <div class="text-content">
                                                                <p>Integer ex turpis, venenatis vitae nibh vel, vestibulum maximus quam. Ut pretium orci ac vestibulum porttitor. Fusce tempus diam quis justo porttitor gravida.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper"><h2 class="vc_custom_heading vc_custom_1458140045264" style="font-size: 40px;color: #434343;text-align: center;font-family:Open Sans;font-weight:400;font-style:normal">FAQ Second Version</h2></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What Shipping Methods Are Available?</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseOne" class="vc_toggle_content panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTow">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#collapseTow" aria-expanded="true" aria-controls="collapseTow">How Long Will it Take To Get My Package?</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseTow" class="vc_toggle_content panel-collapse collapse" role="tabpanel" aria-labelledby="headingTow">
                                                <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">How Do I Track My Order?</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseThree" class="vc_toggle_content panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                                            </div>
                                        </div>

                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#headingFour" aria-expanded="true" aria-controls="collapseFour">How Do I Place an Order?</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseFour" class="vc_toggle_content panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How Should I to Contact if I Have Any Queries?</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseFive" class="vc_toggle_content panel-collapse collapse" role="tabpanel" aria-labelledby="headingTow">
                                                <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingSix">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Do I Need an Account to Place an Order?</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseSix" class="vc_toggle_content panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus ultrices tristique. Nam ac nunc augue. Suspendisse finibus in dolor eget volutpat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .entry-content -->
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->


@endsection