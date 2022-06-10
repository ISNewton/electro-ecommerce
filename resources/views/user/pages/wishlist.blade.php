@extends('user.layout.main')

@section('content')



<div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Wishlist</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="page type-page status-publish hentry">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div id="yith-wcwl-messages"></div>
                                    <div class="woocommerce" method="post" id="yith-wcwl-form">

                                        <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                                        <!-- TITLE -->
                                        <div class="wishlist-title ">
                                            <h2>My wishlist on Electro</h2>
                                        </div>

                                        <!-- WISHLIST TABLE -->
                                        <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">

                                            <thead>
                                                <tr>

                                                    <th class="product-remove"></th>

                                                    <th class="product-thumbnail"></th>

                                                    <th class="product-name">
                                                        <span class="nobr">Product Name</span>
                                                    </th>

                                                    <th class="product-price">
                                                        <span class="nobr">Unit Price</span>
                                                    </th>
                                                    <th class="product-stock-stauts">
                                                        <span class="nobr">Stock Status</span>
                                                    </th>

                                                    <th class="product-add-to-cart"></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($products as $product)
                                                <tr>
                                                    <td class="product-remove">
                                                        <form method="POST" action="{{url('delete_product_from_wishlist/'.$product->id)}}">
                                                            @csrf
                                                        <input type="submit" value="×"  title="Remove this product" class="remove remove_from_wishlist" >
                                                        <input name="id" value="{{$product->id}}" type="hidden"  title="Remove this product" class="remove remove_from_wishlist" >
                                                        </form>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a href="single-product.html"><img width="180" height="180" alt="1" class="wp-post-image" src="{{asset($product->images[0]->image_name)}}"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="single-product.html">{{$product->product_name}}</a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="electro-price"><span class="amount">${{$product->price}}</span></span>
                                                    </td>

                                                    <td class="product-stock-status">
                                                        <span class="in-stock">In stock</span>
                                                    </td>

                                                    <td class="product-add-to-cart">
                                                        <!-- Date added -->

                                                        <!-- Add to cart button -->
                                                        <a data-id="{{$product->id}}" class="button add_to_cart_button"> Add to Cart</a>
                                                        <!-- Change wishlist -->

                                                        <!-- Remove from wishlist -->
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>

                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>



@endsection