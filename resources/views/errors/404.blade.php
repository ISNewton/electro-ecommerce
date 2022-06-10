@extends('user.layout.main')


@section('content')
<div id="content" class="site-content" tabindex="-1">
            	<div class="container">

                	<nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Error 404</nav>
                    <div id="primary" class="content-area">
                		<main id="main" class="site-main">
                            <div class="center-block">
                                <div class="info-404">
                                    <div class="text-xs-center inner-bottom-xs">
                                        <h2 class="display-3">404!</h2>
                                        <p class="lead">Nothing was found at this location. Try searching, or check out the links below.</p>
                                        <hr class="m-y-2">
                                        <div class="sub-form-row inner-bottom-xs">
                                            <div class="widget woocommerce widget_product_search">
                                                <!-- <form class="woocommerce-product-search" method="get" role="search">
                                                    <label for="woocommerce-product-search-field" class="screen-reader-text">Search for:</label>
                                                    <input type="search" title="Search for:" name="s" value="" placeholder="Search Products…" class="search-field" id="woocommerce-product-search-field">
                                                    <input type="submit" value="Search">
                                                    <input type="hidden" value="product" name="post_type">
                                                </form> -->
                                                <a href="{{route('home')}}" class="button">Go back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

@endsection