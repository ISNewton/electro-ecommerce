@extends('user.layout.main')

@section('content')
<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" >
                        <a href="{{route('home')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>Order details
                    </nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">


                            <article id="post-2181" class="post-2181 page type-page status-publish hentry">

                                <header class="entry-header">
                                    <h1 class="entry-title" itemprop="name">Order details</h1>
                                </header><!-- .entry-header -->

                                <div class="entry-content" itemprop="mainContentOfPage">
                                    <div class="woocommerce">
                                        <div>
                                            <p> <b> Order ID: {{$order->id}} </b></p>

                                        </div>

                                        <div>
                                            <p> <b>Total: ${{$order->total}} </b></p>

                                        </div>
                                        <div>
                                            <p> <b>
                                            Order status: <span class="text-success">
                                            @if($order->status == 1)
                                              Pending
                                            @elseif($order->status == 2)
                                              Progress
                                            @else
                                              Delevered (any issues ? please contact: electto@electro.com)
                                            @endif
                                            </span>
                                            </b></p>
                                        </div>

                                        <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">

                                            <thead>
                                                <tr>


                                                    <th class="product-thumbnail"></th>

                                                    <th class="product-name">
                                                        <span class="nobr">Product Name</span>
                                                    </th>

                                                    <th class="product-stock-stauts">
                                                        <span class="nobr">Quantity</span>
                                                    </th>
                                                    <th class="product-price">
                                                        <span class="nobr">Price</span>
                                                    </th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($order->products as $product)
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="{{url('product/'.$product->id)}}"><img width="180" height="180" alt="1" class="wp-post-image" src="{{asset($product->images[0]->image_name)}}"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="{{url('product/'.$product->id)}}">{{$product->product_name}}</a>
                                                    </td>

                                                    
                                                    <td class="product-stock-status">
                                                        <span class="in-stock">{{$product->pivot->quantity}}</span>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="electro-price"><span class="amount">${{$product->pivot->price}}</span></span>
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
            </div><!-- #content -->


@endsection