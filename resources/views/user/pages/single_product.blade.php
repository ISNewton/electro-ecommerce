@extends('user.layout.main')

@section('content')
<div id="content" class="site-content" tabindex="-1">

                <div class="container">

                    <nav class="woocommerce-breadcrumb">
                        <a href="{{route('home')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="{{url('category/'.$product->subcategory->category->id)}}">{{$product->subcategory->category->category_name}}</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="{{url('subcategory/'.$product->subcategory->id)}}">{{$product->subcategory->subcategory_name}}</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>{{$product->product_name}}
                    </nav><!-- /.woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            <div class="product single-product">

                                <div class="single-product-wrapper">
                                    <div class="product-images-wrapper">
                                        <span class="onsale">Sale!</span>
                                        <div class="images electro-gallery">
                                            <div class="thumbnails-single owl-carousel">
                                                @foreach($product->images as $image)
                                                <a  class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img src="{{asset($image->image_name)}}" data-echo="{{asset($image->image_name)}}" class="wp-post-image" alt=""></a>
                                                @endforeach
                                             </div><!-- .thumbnails-single -->

                                            <div class="thumbnails-all columns-5 owl-carousel">
                                            @foreach($product->images as $image)
                                                <a class="first" title=""><img style="width:180px;height:180px" src="{{asset($image->image_name)}}" data-echo="{{asset($image->image_name)}}"  width="180px" class="wp-post-image" alt=""></a>
                                            @endforeach

                                            </div><!-- .thumbnails-all -->
                                        </div><!-- .electro-gallery -->
                                    </div><!-- /.product-images-wrapper -->

                                    <div class="summary entry-summary">

                                        <span class="loop-product-categories">
                                            <a href="{{url('subcatgory/'.$product->subcategory->id)}}" rel="tag">{{$product->subcategory->subcategory_name}}</a>
                                        </span><!-- /.loop-product-categories -->

                                        <h1 itemprop="name" class="product_title entry-title">{{$product->product_name}}</h1>

                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating" title="Rated 4.33 out of 5">
                                                <span style="width:86.6%">
                                                    <strong itemprop="ratingValue" class="rating">4.33</strong>
                                                    out of <span itemprop="bestRating">5</span>				based on
                                                    <span itemprop="ratingCount" class="rating">3</span>
                                                    customer ratings
                                                </span>
                                            </div>

                                            <a href="" class="woocommerce-review-link">(<span itemprop="reviewCount" class="count">3</span> customer reviews)</a>
                                        </div><!-- .woocommerce-product-rating -->

                                        <div class="brand">
                                            @if($product->brand_id)
                                            <a>
                                                <img src="{{asset($product->brand->brand_logo)}}"  />
                                            </a>
                                            @endif
                                        </div><!-- .brand -->
                                            @if($product->product_quantity)
                                            <div class="availability in-stock">Availablity: <span>In stock</span></div><!-- .availability -->
                                            @else
                                        <div class="availability out-of-stock">Availablity: <span>Out of stock</span></div><!-- .availability -->
                                            @endif
                                        <hr class="single-product-title-divider" />

                                        <div class="action-buttons">

                                            <a data-id="{{$product->id}}" class="add_to_wishlist" >
                                                Wishlist
                                            </a>
                                        </div><!-- .action-buttons -->

                                        <div itemprop="description">
                                            {!! $product->product_discription !!}
                                        </div><!-- .description -->

                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                            <p class="price">
                                                <span class="electro-price"><ins><span class="amount">&#36;{{$product->price}}</span></ins>
                                            </p>

                                            <meta itemprop="price" content="1215" />
                                            <meta itemprop="priceCurrency" content="USD" />
                                            <link itemprop="availability" href="http://schema.org/InStock" />

                                        </div><!-- /itemprop -->

                                        <!-- <form class="variations_form cart" > -->

                                            <!-- <table class="variations">
                                                <tbody>
                                                    <tr>
                                                        <td class="label"><label>Color</label></td>
                                                        <td class="value">
                                                            <select class="" name="attribute_pa_color">
                                                                <option value="">Choose an option</option>
                                                                <option value="black-with-red" >Black with Red</option>
                                                                <option value="white-with-gold"  selected='selected'>White with Gold</option>
                                                            </select>
                                                            <a class="reset_variations" href="#">Clear</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> -->


                                            <div class="single_variation_wrap">
                                                <div class="woocommerce-variation single_variation"></div>
                                                <div class="woocommerce-variation-add-to-cart variations_button">
                                                    <!-- <div class="quantity">
                                                        <label>Quantity:</label>
                                                        <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
                                                    </div> -->
                                                    @if($product->product_quantity)
                                                    <a data-id="{{$product->id}}" class="single_add_to_cart_button add_to_cart_button button">Add to cart</a>
                                                    @endif
                                               <!--      <input type="hidden" name="add-to-cart" value="2452" />
                                                    <input type="hidden" name="product_id" value="2452" />
                                                    <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                 --></div>
                                            </div>
                                       <!--  </form> -->

                                    </div><!-- .summary -->
                                </div><!-- /.single-product-wrapper -->


                                @if(count($related_products))
                                <div class="related products">
                                    <h2>Related Products</h2>

                                    <ul class="products columns-5">

                                        @foreach($related_products as $product)
                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="{{$product->subcategory->id}}" rel="tag">{{$product->subcategory->subcategory_name}}</a></span>
                                                    <a href="{{url('product/'.$product->id)}}">
                                                        <h3>{{$product->product_name}}</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="{{asset($product->images[0]->image_name)}}" src="assets/images/blank.gif" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                  <ins><span class="amount">&#036;{{$product->price}}</span></ins>
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
                                        </li>
                                        @endforeach

                                    </ul><!-- /.products -->
                                </div><!-- /.related -->
                                @endif
                            </div><!-- /.product -->

                        </main><!-- /.site-main -->
                    </div><!-- /.content-area -->
                </div><!-- /.container -->
            </div><!-- /.site-content -->



@endsection
