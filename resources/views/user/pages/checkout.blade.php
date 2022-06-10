@php  
$shipping = DB::table('settings')->first()->shipping;
@endphp

@extends('user.layout.main')

@section('content')


<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Checkout</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry">
                                <header class="entry-header"><h1 itemprop="name" class="entry-title">Checkout</h1></header><!-- .entry-header -->

                                <form  action="{{route('place_order')}}" class="checkout woocommerce-checkout" method="post" name="checkout">
                                    @csrf
                                    <div id="customer_details" class="col2-set">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Billing Details</h3>

                                                @error('country')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                <p id="billing_country_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="billing_country">Country <abbr title="required" class="required text-danger">*</abbr></label><input required type="text" value="" placeholder="" id="billing_country" name="country" class="input-text "></p><div class="clear"></div>
                                                
                                                @error('first_address')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address <abbr title="required" class="required text-danger">*</abbr></label><input required type="text" value="" placeholder="Street address" id="billing_address_1" name="first_address" class="input-text "></p>

                                                @error('second_address')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                <p id="billing_address_2_field" class="form-row form-row form-row-wide address-field"><input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="second_address" class="input-text "></p>

                                                @error('city')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                <p id="billing_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_city">Town / City <abbr title="required" class="required text-danger">*</abbr></label><input required type="text" value="" placeholder="" id="billing_city" name="city" class="input-text "></p>

                                                @error('state')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                <p id="billing_state_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_state">State <abbr title="required" class="required text-danger">*</abbr></label><input required type="text" value="" placeholder="" id="billing_state" name="state" class="input-text "></p>

                                                @error('zip_code')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                                <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Postcode / ZIP <abbr title="required" class="required text-danger">*</abbr></label><input required type="text" value="" placeholder="" id="billing_postcode" name="zip_code" class="input-text "></p>

                                                <div class="clear"></div>


                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <h3>Shipping Details</h3>
                                            <div class="woocommerce-shipping-fields">
                                                <!-- <h3 id="ship-to-different-address">
                                                    <label class="checkbox" for="ship-to-different-address-checkbox">Ship to a different address?</label>
                                                    <input type="checkbox" value="1" name="ship_to_different_address" class="input-checkbox" id="ship-to-different-address-checkbox">
                                                </h3> -->
                                         
                                                <p id="order_comments_field" class="form-row form-row notes"><label class="" for="order_comments">Order Notes</label><textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comment"></textarea></p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 id="order_review_heading">Your order</h3>

                                    <div class="woocommerce-checkout-review-order" id="order_review">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(Session::get('cart') as $product)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                         {{$product['product']->product_name}}&nbsp;
                                                            <strong class="product-quantity">× {{$product['quantity']}}</strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">${{$product['product']->price * $product['quantity']}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">${{Session::get('subtotal')}}</span></td>
                                                </tr>
                                                @if(Session::get('coupon'))
                                                <tr class="cart-subtotal">
                                                    <th>Coupon ({{Session::get('coupon')['code']}})</th>
                                                    <td><span class="amount">%{{Session::get('coupon')['discount']}}  <p><b>(${{Session::get('coupon_amount')}})</b></p></span></td>
                                                </tr>
                                                @endif

                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping">Flat Rate: <span class="amount">${{$shipping}}</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">${{Session::get('total')}}</span></strong> </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <div class="woocommerce-checkout-payment" id="payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <!-- <li class="wc_payment_method payment_method_bacs">
                                                    <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                    <label for="payment_method_bacs">Direct Bank Transfer</label>
                                                    <div class="payment_box payment_method_bacs">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_cheque">
                                                    <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                    <label for="payment_method_cheque">Cheque Payment 	</label>
                                                    <div style="display:none;" class="payment_box payment_method_cheque">
                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </li> -->
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input checked name="payment_method" required type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">

                                                    <label  for="payment_method_cod">Cash on Delivery</label>
                                                    <div style="display:none;" class="payment_box payment_method_cod">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>
                                                <!-- <li class="wc_payment_method payment_method_paypal">
                                                    <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">

                                                    <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/us/webapps/mpp/paypal-popup">What is PayPal?</a></label>
                                                    <div style="display:none;" class="payment_box payment_method_paypal">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </div>
                                                </li> -->
                                            </ul>
                                            <div class="form-row place-order">

                                                <p class="form-row terms wc-terms-and-conditions">
                                                    <input type="checkbox" required id="terms" name="terms" class="input-checkbox">
                                                    <label class="checkbox" for="terms">I’ve read and accept the <a target="_blank" href="terms-and-conditions.html">terms &amp; conditions</a> <span class="required">*</span></label>
                                                    <input type="hidden" value="1" name="terms-field">
                                                </p>

                                                <input type="submit" data-value="Place order" value="Place order" class="button alt">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->



@endsection