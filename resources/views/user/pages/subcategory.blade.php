@extends('user.layout.main')

@section('content')



<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" >
                        <a href="{{route('home')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="{{url('category/'.$subcategory->category->id)}}">{{$subcategory->category->category_name}}</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        {{$subcategory->subcategory_name}}</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <!-- <section class="section-product-cards-carousel" >
                                <header>
                                    <h2 class="h1">Recommended Products</h2>
                                    <div class="owl-nav">
                                        <a href="#products-carousel-prev" data-target="#recommended-product" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                        <a href="#products-carousel-next" data-target="#recommended-product" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </header>

                                <div id="recommended-product">
                                    <div class="woocommerce columns-4">
                                        <div class="products owl-carousel products-carousel columns-4 owl-loaded owl-drag">
                                            @foreach($subcategory->products as $product)

                                            <div class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                        <a href="single-product.html">
                                                            <h3>{{$product->product_name}}</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="assets/images/blank.gif" data-echo="{{asset($product->images[0]->image_name)}}" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    @if($product->discount_price)
                                                                    <ins><span class="amount">{{$product->discount_price}}</span></ins>
                                                                    <del><span class="amount">{{$product->sell_price}}</span></del>
                                                                    
                                                                    @else
                                                                    <ins><span class="amount">{{$product->sell_price}}</span></ins>
                                                                    @endif
                                                                </span>
                                                            </span>
                                                            <a rel="nofollow" data-id="{{$product->id}}" class="button add_to_cart_button">Add to cart</a>
                                                        </div> /.price-add-to-cart

                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                                <a href="#" data-id="{{$product->id}}" class="add_to_wishlist"> Wishlist</a>
                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>

                                                    </div> /.product-inner 
                                                </div> /.product-outer 
                                            </div> /.products 

                                            @endforeach
                                    </div>
                                </div>
                            </section>
                            -->
                            <header class="page-header">
                                <h1 class="page-title">{{$subcategory->subcategory_name}}</h1>
<!--                                 <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
 -->                            </header>
<!-- 
                            <div class="shop-control-bar">
                                <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                                     <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                                     <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order"  selected='selected'>Default sorting</option>
                                        <option value="popularity" >Sort by popularity</option>
                                        <option value="rating" >Sort by average rating</option>
                                        <option value="date" >Sort by newness</option>
                                        <option value="price" >Sort by price: low to high</option>
                                        <option value="price-desc" >Sort by price: high to low</option>
                                    </select>
                                </form> 

                                <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form>
                                <nav class="electro-advanced-pagination">
                                    <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>			<script>
                                    jQuery(document).ready(function($){
                                        $( '.form-adv-pagination' ).on( 'submit', function() {
                                            var link 		= '#',
                                            goto_page 	= $( '#goto-page' ).val(),
                                            new_link 	= link.replace( '%#%', goto_page );

                                            window.location.href = new_link;
                                            return false;
                                        });
                                    });
                                    </script>
                                </nav> 
                            </div>
 -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane " id="grid" aria-expanded="true">

                                    <ul class="products columns-3">
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>

                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="grid-extended" aria-expanded="true">

                                    <ul class="products columns-3">
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        <li class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
                                                    </a>
                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                <del><span class="amount">&#036;2,299.00</span></del>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                    </ul>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="true">
                                    <ul class="products columns-3">
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="list-view-small" aria-expanded="true">

                                    <ul class="products columns-3">
                                        @foreach($subcategory->products as $product)
                                            <li class="product list-view list-view-small">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="{{url('product/'.$product->id)}}">
                                                            <img class="wp-post-image" data-echo="{{asset($product->images[0]->image_name)}}" src="assets/images/blank.gif" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <span class="loop-product-categories"><a rel="tag" >{{$subcategory->subcategory_name}}</a></span><a href="{{url('product/'.$product->id)}}"><h3>{{$product->product_name}}</h3>
                                                                    <div class="product-short-description">
                                                                        {{$product->prodct_discription}}
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <div class="price-add-to-cart">
                                                                    <span class="price"><span class="electro-price"><span class="amount">${{$product->price}}</span></span></span>
                                                                    <a class="button add_to_cart_button" data-id="{{$product->id}}" rel="nofollow">Add to cart</a>
                                                                </div><!-- /.price-add-to-cart -->

                                                                <div class="hover-area">
                                                                    <div class="action-buttons">
                                                                        <a data-id="{{$product->id}}" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="shop-control-bar-bottom">
                                <form class="form-electro-wc-ppp">
                                    <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Show All</option></select>
                                </form>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="next page-numbers">→</a></li>
                                    </ul>
                                </nav>
                            </div> -->

                        </main><!-- #main -->
                    </div><!-- #primary -->

                   <!--  <div id="sidebar" class="sidebar" role="complementary">
                        <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                    <ul class="show-all-cat">
                                        <li class="product_cat"><span class="show-all-cat-dropdown">Show All Categories</span>
                                            <ul>
                                                <li class="cat-item"><a href="product-category.html">GPS &amp; Navi</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Home Entertainment</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Cameras &amp; Photography</a> <span class="count">(5)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Smart Phones &amp; Tablets</a> <span class="count">(20)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Video Games &amp; Consoles</a> <span class="count">(3)</span></li>
                                                <li class="cat-item"><a href="product-category.html">TV &amp; Audio</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Gadgets</a> <span class="count">(3)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Car Electronic &amp; GPS</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Accessories</a> <span class="count">(11)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Printers &amp; Ink</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Software</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Office Supplies</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Computer Components</a> <span class="count">(1)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="cat-item current-cat"><a href="product-category.html">Laptops &amp; Computers</a> <span class="count">(13)</span>
                                            <ul class='children'>
                                                <li class="cat-item"><a href="product-category.html">Laptops</a> <span class="count">(6)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Ultrabooks</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Computers</a> <span class="count">(0)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Mac Computers</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">All in One</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Servers</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Peripherals</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Gaming</a> <span class="count">(1)</span></li>
                                                <li class="cat-item"><a href="product-category.html">Accessories</a> <span class="count">(2)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_electro_products_filter">
                            <h3 class="widget-title">Filters</h3>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Brands</h3>
                                <ul>
                                    <li style=""><a href="#">Apple</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Gionee</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">HTC</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">LG</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">Micromax</a> <span class="count">(1)</span></li>
                                </ul>
                                <p class="maxlist-more"><a href="#">+ Show more</a></p>
                            </aside>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Color</h3>
                                <ul>
                                    <li style=""><a href="#">Black</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Black Leather</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">Turquoise</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">White</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Gold</a> <span class="count">(4)</span></li>
                                </ul>
                                <p class="maxlist-more"><a href="#">+ Show more</a></p>
                            </aside>
                            <aside class="widget woocommerce widget_price_filter">
                                <h3 class="widget-title">Price</h3>
                                <form action="#">
                                    <div class="price_slider_wrapper">
                                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span>
                                        </div>
                                        <div class="price_slider_amount">
                                            <a href="#" class="button">Filter</a>
                                            <div style="" class="price_label">Price: <span class="from">$428</span> &mdash; <span class="to">$3485</span></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </aside>
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <a href="#"><img src="assets/images/banner/ad-banner-sidebar.jpg" alt="Banner"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_products">
                            <h3 class="widget-title">Latest Products</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                                        <img width="180" height="180" src="assets/images/product-category/1.jpg" class="wp-post-image" alt=""/><span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Tablet Thin EliteBook  Revolve 810 G6">
                                        <img width="180" height="180" src="assets/images/product-category/2.jpg" class="wp-post-image" alt=""/><span class="product-title">Tablet Thin EliteBook  Revolve 810 G6</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">&#36;1,300.00</span></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Notebook Widescreen Z51-70  40K6013UPB">
                                        <img width="180" height="180" src="assets/images/product-category/3.jpg" class="wp-post-image" alt=""/><span class="product-title">Notebook Widescreen Z51-70  40K6013UPB</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">&#36;1,100.00</span></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Notebook Purple G952VX-T7008T">
                                        <img width="180" height="180" src="assets/images/product-category/4.jpg" class="wp-post-image" alt=""/><span class="product-title">Notebook Purple G952VX-T7008T</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">&#36;2,780.00</span></span>
                                </li>
                            </ul>
                        </aside>
                    </div>
 -->
                </div><!-- .container -->
            </div><!-- #content -->



@endsection