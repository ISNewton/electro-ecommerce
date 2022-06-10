@extends('user.layout.main')

@section('content')

<div id="content" class="site-content" tabindex="-1">

            <div class="container">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="home-v3-slider" >
                            	<!-- ========================================== SECTION – HERO : END========================================= -->

                            	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                                    @foreach($main_slider->products as $product)
                                        <div class="item" style="background-image: url({{$product->images[0]->image_name}})">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="caption vertical-center text-left">
                                                            <div class="hero-subtitle-v2 fadeInDown-1">
                                                                shop to get what you loves

                                                            </div>

                                                            <div class="hero-2 fadeInDown-2">
                                                                Timepieces that make a statement up to <strong>40% Off</strong>
                                                            </div>

                                                            <div class="hero-action-btn fadeInDown-3">
                                                                <a href="{{url('product/'.$product->id)}}" class="big le-button ">Start Buying</a>
                                                            </div>
                                                        </div><!-- /.caption -->
                                                    </div><!-- /.col -->
                                                </div>
                                            </div><!-- /.container -->
                                        </div><!-- /.item -->
                                    @endforeach

                            	</div><!-- /.owl-carousel -->

                            <!-- ========================================= SECTION – HERO : END ========================================= -->
                            </div><!-- /.home-v1-slider -->

                            <div class="home-v3-features-block animate-in-view fadeIn animated" data-animation="fadeIn">
                            	<div class="features-list columns-5">
                            		<div class="feature">
                            			<div class="media">
                            				<div class="media-left media-middle feature-icon">
                            					<i class="ec ec-transport"></i>
                            				</div>
                            				<div class="media-body media-middle feature-text">
                            					<strong>Free Delivery</strong> from $50
                            				</div>
                            			</div>
                            		</div><!-- .feature -->

                            		<div class="feature">
                            			<div class="media">
                            				<div class="media-left media-middle feature-icon">
                            					<i class="ec ec-customers"></i>
                            				</div>
                            				<div class="media-body media-middle feature-text">
                            					<strong>99% Positive</strong> Feedbacks
                            				</div>
                            			</div>
                            		</div><!-- .feature -->

                            		<div class="feature">
                            			<div class="media">
                            				<div class="media-left media-middle feature-icon">
                            					<i class="ec ec-returning"></i>
                            				</div>
                            				<div class="media-body media-middle feature-text">
                            					<strong>365 days</strong> for free return
                            				</div>
                            			</div>
                            		</div><!-- .feature -->

                            		<div class="feature">
                            			<div class="media">
                            				<div class="media-left media-middle feature-icon">
                            					<i class="ec ec-payment"></i>
                            				</div>
                            				<div class="media-body media-middle feature-text">
                            					<strong>Payment</strong> Secure System
                            				</div>
                            			</div>
                            		</div><!-- .feature -->

                            		<div class="feature">
                            			<div class="media">
                            				<div class="media-left media-middle feature-icon">
                            					<i class="ec ec-tag"></i>
                            				</div>
                            				<div class="media-body media-middle feature-text">
                            					<strong>Only Best</strong> Brands
                            				</div>
                            			</div>
                            		</div><!-- .feature -->
                            	</div><!-- .features-list -->
                            </div><!-- .home-v3-features-block -->

                            <section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
                            	<h2 class="sr-only">Product Carousel Tabs</h2>
                            	<ul class="nav nav-inline text-xs-left">
                            		<li class="nav-item">
                            			<a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a>
                            		</li>

                            		<li class="nav-item">
                            			<a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a>
                            		</li>

                            		<li class="nav-item">
                            			<a class="nav-link" href="#tab-products-3" data-toggle="tab">Top Rated</a>
                            		</li>
                            	</ul><!-- /.nav -->

                            	<div class="tab-content">
                            		<div class="tab-pane active" id="tab-products-1" role="tabpanel">
                            			<section class="section-products-carousel" >
                            				<div class="home-v3-owl-carousel-tabs">
                            					<div class="woocommerce columns-4">

                                                    <div class="products owl-carousel home-v3-carousel-tabs products-carousel columns-4">
                                                        @foreach($featured->products as $product)

                                                            <div class="product">
                                                                <div class="product-outer">
                                                                    <div class="product-inner">
                                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                                        <a href="{{url('product/'.$product->id)}}">
                                                                            <h3>{{$product->product_name}}</h3>
                                                                            @php  
                                                                            echo $product->product_name
                                                                            @endphp
                                                                            <div class="product-thumbnail">
                                                                                <img src="{{asset($product->images[0]->image_name)}}" data-echo="{{asset($product->images[0]->image_name)}}" class="img-responsive" alt="">
                                                                            </div>
                                                                        </a>

                                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                            </span>
                                                                            <a rel="nofollow" data-id="{{$product->id}}" data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                                        </div><!-- /.price-add-to-cart -->

                                                                        <div class="hover-area">
                                                                            <div class="action-buttons">

                                                                                <div data-id="{{$product->id}}" rel="nofollow" class="add_to_wishlist"> Wishlist</div>

                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.product-inner -->
                                                                </div><!-- /.product-outer -->
                                                            </div><!-- /.product -->
                                                        @endforeach


                                                    </div><!-- /.products -->
                            					</div>
                            				</div>
                            			</section>
                            		</div><!-- /.tab-pane -->

                            		<div class="tab-pane" id="tab-products-2" role="tabpanel">
                            			<section class="section-products-carousel">
                            				<div class="home-v3-owl-carousel-tabs">
                            					<div class="woocommerce columns-4">

                                                    <div class="products owl-carousel home-v3-carousel-tabs products-carousel columns-4">

                                                    @foreach($on_sale->products as $product)

                                                       <div class="product first">
                                                           <div class="product-outer">
                                                               <div class="product-inner">
                                                                   <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                                   <a href="{{url('product/'.$product->id)}}">
                                                                       <h3>{{$product->product_name}}</h3>
                                                                       <div class="product-thumbnail">
                                                                           <img src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" class="img-responsive" alt="">
                                                                       </div>
                                                                   </a>

                                                                   <div class="price-add-to-cart">
                                                                       <span class="price">
                                                                           <span class="electro-price">
                                                                           <ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                               <span class="amount"> </span>
                                                                           </span>
                                                                       </span>
                                                                       <a rel="nofollow"  data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                                   </div><!-- /.price-add-to-cart -->

                                                                   <div class="hover-area">
                                                                       <div class="action-buttons">

                                                                           <div data-id="{{$product->id}}" rel="nofollow" class="add_to_wishlist"> Wishlist</div>

                                                                       </div>
                                                                   </div>
                                                               </div><!-- /.product-inner -->
                                                           </div><!-- /.product-outer -->
                                                       </div><!-- /.product -->
                                                   @endforeach

                                                    </div><!-- /.products -->
                            					</div>
                            				</div>
                            			</section>
                            		</div><!-- /.tab-pane -->

                            		<div class="tab-pane" id="tab-products-3" role="tabpanel">
                            			<section class="section-products-carousel">
                            				<div class="home-v3-owl-carousel-tabs">
                            					<div class="woocommerce columns-4">

                                                    <div class="products owl-carousel home-v3-carousel-tabs products-carousel columns-4">

                                                    @foreach($top_rated->products as $product)

                                                       <div class="product first">
                                                           <div class="product-outer">
                                                               <div class="product-inner">
                                                                   <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                                   <a href="{{url('product/'.$product->id)}}">
                                                                       <h3>{{$product->product_name}}</h3>
                                                                       <div class="product-thumbnail">
                                                                           <img src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" class="img-responsive" alt="">
                                                                       </div>
                                                                   </a>

                                                                   <div class="price-add-to-cart">
                                                                       <span class="price">
                                                                           <span class="electro-price">
                                                                           <ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                               <span class="amount"> </span>
                                                                           </span>
                                                                       </span>
                                                                       <a rel="nofollow" data-id="{{$product->id}}" data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                                   </div><!-- /.price-add-to-cart -->

                                                                   <div class="hover-area">
                                                                       <div class="action-buttons">
                                                                           <div data-id="{{$product->id}}" rel="nofollow" data-id="{{$product->id}}" class="add_to_wishlist"> Wishlist</div>
                                                                       </div>
                                                                   </div>
                                                               </div><!-- /.product-inner -->
                                                           </div><!-- /.product-outer -->
                                                       </div><!-- /.product -->
                                                   @endforeach
                                                    </div><!-- /.products -->
                            					</div>
                            				</div>
                            			</section>
                            		</div><!-- /.tab-pane -->
                            	</div><!-- /.tab-content -->
                            </section><!-- /.products-carousel-tabs -->
                            @if(count($cell_phones->products))
                            <section class="products-carousel-with-image animate-in-view fadeIn animated" style="background-size: cover; background-position: center center; background-image: url( assets/images/home-v3-bg.jpg );" data-animation="fadeIn">
                                <h2 class="sr-only">Products Carousel</h2>
                                <div class="container">
                                    <div class="row">
                                        <div class="image-block col-xs-12 col-sm-6">
                                            
                                            <img data-echo="{{asset($cell_phones->products[0]->images[0]->image_name)}}" src="assets/images/blank.gif" alt="">
                                           
                                        </div><!-- /.image-block -->

                                        <div class="products-carousel-block col-xs-12 col-sm-6">
                                            <section class="home-v2-categories-products-carousel section-products-carousel" >

                                                <header>
                                                    <h2 class="h1">Cell phones</h2>
                                                    <div class="owl-nav">
                                                        <a href="#products-carousel-prev" data-target="#products-carousel-with-umage" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                                        <a href="#products-carousel-next" data-target="#products-carousel-with-umage" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                                    </div>

                                                </header>

                                                <div id="products-carousel-with-umage">
                                                    <div class="woocommerce columns-4">


                                                        <div class="products owl-carousel home-v3-carousel-tabs products-carousel columns-4">

                                                        @foreach($cell_phones->products as $product)
                                                            <div class="product ">
                                                                <div class="product-outer">
                                                                    <div class="product-inner">
                                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$product->subcategory->subcategory_name}}</a></span>
                                                                        <a href="{{url('product/'.$product->id)}}">
                                                                            <h3>{{$product->product_name}}</h3>
                                                                            <div class="product-thumbnail">
                                                                                <img src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" class="img-responsive" alt="">
                                                                            </div>
                                                                        </a>

                                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                     <ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                            </span>
                                                                            <a rel="nofollow" data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                                        </div><!-- /.price-add-to-cart -->

                                                                        <div class="hover-area">
                                                                            <div class="action-buttons">

                                                                                <div  rel="nofollow" data-id="{{$product->id}}" class="add_to_wishlist"> Wishlist</div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.product-inner -->
                                                                </div><!-- /.product-outer -->
                                                            </div><!-- /.product -->
                                                            

                                                        @endforeach

                                                        </div><!-- /.products -->
                                                    </div>
                                                </div>
                                            </section>
                                        </div><!-- /.iproducts-carousel-block -->
                                    </div><!-- /.row -->
                                </div><!-- /.conainer -->
                            </section><!-- /.products-carousel-with-image-->
                            @endif

                            @if(count($televisions->products))
                            <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                                <header>
                                    <h2 class="h1">Televisions</h2>

                                    <div class="owl-nav">
                                        <a href="#products-cards-carousel-prev" data-target="#homev3-products-cards-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                        <a href="#products-cards-carousel-next" data-target="#homev3-products-cards-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </header><!-- /header-->


                                <div id="homev3-products-cards-carousel">
                                    <div class="woocommerce home-v3 columns-2 product-cards-carousel owl-carousel">

                                        <ul class="products columns-2">
                                            @foreach($televisions->products as $product)
                                            @if($loop->even)
                                            <li class="product product-card first">

                                                <div class="product-outer">
                                                    <div class="media product-inner">

                                                        <a class="media-left" href="{{url('product/'.$product->id)}}" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" alt="">

                                                        </a>

                                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">{{$product->subcategory->subcategory_name}}</a>
                                                            </span>

                                                            <a href="{{url('product/'.$product->id)}}">
                                                                <h3>{{$product->product_name}}</h3>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                    </span>
                                                                </span>

                                                                <a data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <div data-id="{{$product->id}}" class="add_to_wishlist">
                                                                        Wishlist</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->

                                            </li><!-- /.products -->
                                            @endif
                                            @endforeach
                                        </ul>

                                        <ul class="products columns-2">
                                            @foreach($televisions->products as $product)
                                            @if($loop->odd)
                                            <li class="product product-card first">

                                                <div class="product-outer">
                                                    <div class="media product-inner">

                                                        <a class="media-left" href="{{url('product/'.$product->id)}}" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" alt="">

                                                        </a>

                                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="{{url('subcategory/'.$product->subcategory->id)}}" rel="tag">{{$product->subcategory->subcategory_name}}</a>
                                                            </span>

                                                            <a href="{{url('product/'.$product->id)}}">
                                                                <h3>{{$product->product_name}}</h3>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                                                                                                   <ins><span class="amount"> ${{$product->price}}</span></ins>
<ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                    </span>
                                                                </span>

                                                                <a data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <div data-id="{{$product->id}}" class="add_to_wishlist">
                                                                        Wishlist</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->

                                            </li><!-- /.products -->
                                            @endif
                                            @endforeach
                                        </ul>



                                    </div>
                                </div><!-- /#homev3-products-cards-carousel-->

                            </section><!-- /.section-product-cards-carousel-->
                            @endif
                            
                            @if(count($best_sellers->products) && count($best_sellers_main_product->products))
                            <section class="products-6-1 animate-in-view fadeIn animated" data-animation="fadeIn">
                                <div class="container">
                                    <header>
                                        <h2 class="h1">Bestsellers</h2>
                                        <ul class="nav nav-inline">
                                            <li class="nav-item active">
                                                <span class="nav-link">Top 7</span>
                                            </li>
                                        </ul>
                                    </header>

                                    <div class="columns-6-1">
                                        <ul class="products exclude-auto-height products-6">
                                          @foreach($best_sellers->products as $product)
                                            <li class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="{{url('subcategory/'.$product->subcategory->id)}}" rel="tag">{{$product->subcategory->subcategory_name}}</a></span>
                                                        <a href="{{url('product/'.$product->id)}}">
                                                            <h3>{{$product->product_name}}</h3>
                                                            <div class="product-thumbnail">

                                                                <img data-echo="{{asset($product->images[0]->image_name)}}" src="{{asset($product->images[0]->image_name)}}" alt="">


                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                <ins><span class="amount"> ${{$product->price}}</span></ins>
                                                                </span>
                                                            </span>
                                                            <a rel="nofollow" data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <div data-id="{{$product->id}}" rel="nofollow" class="add_to_wishlist">
                                                                    Wishlist</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li>
                                           @endforeach
                                        </ul>
                                            
                                        <ul class="products exclude-auto-height product-main-6-1">
                                            
                                            <li class="first product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="{{url($best_sellers->products[0]->subcategory->subcategory_name)}}" rel="tag">{{$best_sellers->products[0]->subcategory->subcategory_name}}</a>
                                                        </span>

                                                        <a href="{{url('product/'.$product->id)}}">
                                                            <h3>{{$best_sellers->products[0]->product_name}}</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" class="wp-post-image" alt="">
                                                            </div>
                                                        </a>
<!-- 
                                                         <div class="thumbnails columns-3">
                                                            @foreach($best_sellers->products[0]->images as $image)
                                                            <a href="images/products/thumb2.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                                                <img src="assets/images/blank.gif" data-echo="{{asset($image->image_name)}}"  alt="">
                                                            </a>
                                                            @endforeach

                                                        </div>  -->

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price"><ins><span class="amount">&#36;{{$best_sellers->products[0]->price}}</span></ins> </span>
                                                            </span>

                                                            <a rel="nofollow" data-id="{{$best_sellers->products[0]->id}}" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <div data-id="{{$best_sellers->products[0]->id}}" rel="nofollow" class="add_to_wishlist">
                                                                    Wishlist</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </li><!-- /.product -->
                                            
                                        </ul><!-- /.products-->
                                    </div><!-- /.columns-6-1 -->
                                </div><!-- /.container-->
                            </section><!-- /.products-6-1 -->
                            @endif


                            <section class="home-list-categories animate-in-view fadeIn animated" data-animation="fadeIn">
                                <header>
                                    <h2 class="h1">Top Categories this Month</h2>
                                </header>
                                <ul class="categories">
                                    @foreach($categories_main as $category)
                                    <li class="category">
                                        <div class="media">
                                            <a class="media-left" href="{{url('category/'.$category->id)}}">
                                                <img data-echo="{{asset($category->thumbnail)}}" src="{{asset($category->thumbnail)}}" alt="{{$category->category_name}}">
                                            </a><!-- /.media-left -->

                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{url('category/'.$category->id)}}">{{$category->category_name}}</a></h4>
                                                <ul class="sub-categories list-unstyled">
                                                    @foreach($category->subcategories as $subcategory)
                                                    <li class="cat-item">
                                                        <a href="{{url('subcategory/'.$subcategory->id)}}" >{{$subcategory->subcategory_name}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                        <a class="see-all" href="{{url('category/'.$category->id)}}">See all</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </section>

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->

            @if(count($brands))

            <section class="brands-carousel">
                <h2 class="sr-only">Brands Carousel</h2>
                <div class="container">
                    <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">

                    @foreach($brands as $brand)
                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>{{$brand->brand_name}}</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="assets/images/blank.gif" data-echo="{{asset($brand->brand_logo)}}" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->
                        @endforeach



                    </div><!-- /.owl-carousel -->

                </div>
            </section>

            @endif










            
            <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                        @if(count($featured->products))
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Featured Products</h4>
                                        <ul class="product_list_widget">
                                            @foreach($featured->products as $product)
                                            <li>
                                                <a href="{{url('product/'.$product->id)}}" title="Tablet Thin EliteBook  Revolve 810 G6">
                                                    <img class="wp-post-image" data-echo="{{asset($product->images[0]->image_name)}}" src="{{asset('frontend/assets/images/blank.gif')}}" alt="">
                                                    <span class="product-title">{{$product->product_name}}</span>
                                                </a>
                                                <ins><span class="amount"> ${{$product->price}}</span></ins>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif

                        @if(count($on_sale->products))
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <aside class="widget clearfix">
                                    <div class="body"><h4 class="widget-title">Onsale Products</h4>
                                        <ul class="product_list_widget">
                                            @foreach($on_sale->products as $product)
                                            <li>
                                                <a href="{{url('product/'.$product->id)}}" title="Tablet Thin EliteBook  Revolve 810 G6">
                                                    <img class="wp-post-image" data-echo="{{asset($product->images[0]->image_name)}}" src="{{asset('frontend/assets/images/blank.gif')}}" alt="">
                                                    <span class="product-title">{{$product->product_name}}</span>
                                                </a>
                                                <ins><span class="amount"> ${{$product->price}}</span></ins>
                                            </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif

                        @if(count($top_rated->products))
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Top Rated Products</h4>
                                        <ul class="product_list_widget">
                                        @foreach($top_rated->products as $product)
                                            <li>
                                                <a href="{{url('product/'.$product->id)}}" title="Tablet Thin EliteBook  Revolve 810 G6">
                                                    <img class="wp-post-image" data-echo="{{asset($product->images[0]->image_name)}}" src="{{asset('frontend/assets/images/blank.gif')}}" alt="">
                                                    <span class="product-title">{{$product->product_name}}</span>
                                                </a>
                                                <ins><span class="amount"> ${{$product->price}}</span></ins>
                                            </li>

                                            @endforeach


                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>



@endsection
