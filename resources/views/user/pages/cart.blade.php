
@php  
$shipping = DB::table('settings')->first()->shipping;
@endphp

@extends('user.layout.main')

@section('content')

<div id="content" class="site-content" tabindex="-1">

            	<div class="container">

            		<nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Cart</nav>

            		<div id="primary" class="content-area">
            			<main id="main" class="site-main">
            				<article class="page type-page status-publish hentry">
            					<header class="entry-header"><h1 itemprop="name" class="entry-title">Cart</h1></header><!-- .entry-header -->

            					<div>

                                    <table class="shop_table shop_table_responsive cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(Session::get('cart'))
                                            @foreach(Session::get('cart') as $product)
                                            <tr class="cart_item">

                                                <td class="product-remove">
                                                    <form method="POST" action="{{url('/delete_product_from_cart/'.$product['product']->id)}}">
                                                        @csrf
                                                        <button type="submit" class="remove" href="#">×</button>
                                                    </form>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="{{url('product/'.$product['product']->id)}}"><img width="180" height="180" src="{{asset($product['product']->images[0]->image_name)}}" alt=""></a>
                                                </td>

                                                <td data-title="Product" class="product-name">
                                                    <a href="{{url('product/'.$product['product']->id)}}">{{$product['product']->product_name}}</a>
                                                </td>

                                                <td data-title="Price" class="product-price">
                                                    <span class="amount">${{$product['product']->price}}</span>
                                                </td>

                                                <td data-title="Quantity" class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <form action="{{url('edit_product_quantity/'.$product['product']->id)}}" method="post">
                                                            @csrf
                                                            <input type="submit" class="minus" name="quantity_action" value="-">
                                                            <label>Quantity:</label>
                                                            <input type="number" disabled size="4" class="input-text qty text" title="Qty" value="{{$product['quantity']}}" name="quantity" max="29" min="0" step="1">
                                                            <input type="submit" name="quantity_action" class="plus" value="+">
                                                        </form>
                                                    </div>
                                                </td>

                                                <td data-title="Total" class="product-subtotal">
                                                    <span class="amount">${{$product['product']->price * $product['quantity']}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            

                                            <tr>
                                            
                                                <td class="actions" colspan="6">

                                                    <div class="coupon">
                                                        @if(!Session::get('coupon'))

                                                        <form action="{{url('/apply_coupon')}}" method="POST">
                                                            @csrf
                                                            @error('code')
                                                            <div class="text-danger">{{$message}}</div>
                                                            @enderror
                                                            <label for="coupon_code">Coupon:</label> 
                                                            <input required type="text" placeholder="Coupon code"   class="input-text" name="code"> 
                                                            <input type="submit" id="coupon_code_btn" value="Apply Coupon" name="apply_coupon" class="button">
                                                        </form>
                                                        @endif
                                                    </div>
                                                    
                                                    @if(Session::get('cart'))
                                                    <div class="wc-proceed-to-checkout">

                                                        <a class="checkout-button button alt wc-forward" href="{{url('checkout')}}">Proceed to Checkout</a>
                                                    </div>
                                                    @endif
                                                    </form>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                
            					      <div class="cart-collaterals">

                                    <div class="cart_totals ">

                                        <h2>Cart Totals</h2>

                                        <table class="shop_table shop_table_responsive">

                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal"><span class="amount">${{Session::get('subtotal')??0}}</span></td>
                                                </tr>

                                                @if(Session::get('coupon'))
                                                <tr>
                                                    <th>
                                                      <p class="d-inline">Coupon ({{Session::get('coupon')['code']}})
                                                      </p>
                                                        <form  class="d-inline" action="{{route('delete_coupon')}}" method="POST">
                                                          @csrf
                                                          <button type="submit" class="remove d-inline custome-btn" href="#">×</button>
                                                        </form>
                                                    </th>

                                                    <td>
                                                        <p>%{{Session::get('coupon')['discount']}}</p>
                                                        <p>${{Session::get('coupon_amount')}}</p>
                                                    </td>
                                                </tr>

                                                @endif


                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping">Flat Rate: <span class="amount">${{$shipping}}</span> 

                                                        
                                                    </td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="amount">${{Session::get('total')??0}}</span></strong> </td>
                                                </tr>


                                            </tbody>
                                        </table>

                                        
                                    </div>
                                </div>
                                @endif
            				</article>
            			</main><!-- #main -->
            		</div><!-- #primary -->
            	</div><!-- .container -->
            </div><!-- #content -->


@endsection
