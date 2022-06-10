@extends('user.layout.main')


@section('content')


<div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <nav class="woocommerce-breadcrumb" >
                        <a href="{{route('home')}}">Home</a>
                        <span class="delimiter">
                            <i class="fa fa-angle-right"></i>
                        </span> {{$category->category_name}}
                    </nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <section>
                                <header>
                                    <h2 class="h1">{{$category->category_name}}</h2>
                                </header>

                                <div class="woocommerce columns-4">
                                    <ul class="product-loop-categories">
                                        @foreach($category->subcategories as $subcategory)
                                            <li class="product-category product">
                                                <a href="{{url('subcategory/'.$subcategory->id)}}">
                                                    <img src="{{asset($subcategory->thumbnail)}}" class="img-responsive" alt="">
                                                    <h3>{{$subcategory->subcategory_name}}<mark class="count">(2)</mark></h3>
                                                </a>
                                            </li><!-- /.item -->
                                        @endforeach
                                    </ul>
                                </div>
                            </section>

                            <section class="section-products-carousel" >

                                <header>

                                    <h2 class="h1">People buying in this category</h2>

                                    <div class="owl-nav">
                                        <a href="#products-carousel-prev" data-target="#product-category-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                        <a href="#products-carousel-next" data-target="#product-category-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                    </div>

                                </header>

                                <div id="product-category-carousel">
                                    <div class="woocommerce columns-6">

                                        <div class="products owl-carousel products-carousel columns-6">
                                            @foreach($category->products as $product)
                                                <div class="product">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a href="{{url('subcategory/'.$product->subcategory->id)}}" rel="tag">{{$product->subcategory->subcategory_name}}</a></span>
                                                            <a href="{{url('product/'.$product->id)}}">
                                                                <h3>{{$product->product_name}}</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        
                                                                        <ins><span class="amount">${{$product->price}}</span></ins>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>
                                                                <a rel="nofollow" data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a data-id="{{$product->id}}" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                                </div>
                                                            </div>

                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.products -->
                                            @endforeach
                                        </div>

                                    </div>

                                </div>
                            </section><!-- /.section-products-carousel -->
                        </main><!-- /.site-main -->
                    </div><!-- /.content-area -->
                </div>
            </div>




@endsection