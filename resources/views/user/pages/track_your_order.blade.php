@extends('user.layout.main')


@section('content')


<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" >
                        <a href="{{route('home')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>Track your Order
                    </nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">


                            <article id="post-2181" class="post-2181 page type-page status-publish hentry">

                                <header class="entry-header">
                                    <h1 class="entry-title" itemprop="name">Track your Order</h1>
                                </header><!-- .entry-header -->

                                <div class="entry-content" itemprop="mainContentOfPage">
                                    <div class="woocommerce">
                                        <form action="{{route('track_order')}}" method="post" class="track_order">
                                            @csrf
                                            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                                            @error('order_id')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                            <p class="form-row form-row-first">
                                                <label for="orderid">Order ID</label>
                                                <input class="input-text" type="text" name="order_id" id="orderid" placeholder="Found in your order confirmation email." />
                                            </p>

                                            @error('email')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                            <p class="form-row form-row-last">
                                                <label for="order_email">Billing Email</label>
                                                <input class="input-text" type="text" name="email" id="order_email" placeholder="Email you used during checkout." />
                                            </p>

                                            <div class="clear"></div>

                                            <p class="form-row">
                                                <input type="submit" class="button" name="track" value="Track" />
                                            </p>
                                        </form>
                                    </div>
                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->


                </div><!-- .col-full -->
            </div><!-- #content -->


@endsection