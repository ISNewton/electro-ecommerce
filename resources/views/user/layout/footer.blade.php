@php  
$settings = DB::table('settings')->first();
@endphp
<footer id="colophon" class="site-footer">
                <div class="footer-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <h5 class="newsletter-title">Sign up to Newsletter</h5>
                                <span class="newsletter-marketing-text">...and receive <strong>$20 coupon for first shopping</strong></span>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <form method="POST" action="{{route('signup_email_subsription')}}">
                                    @csrf
                                    <div class="input-group">
                                        <input style="background-color: white;" name="email" type="email" class="form-control" placeholder="Enter your email address" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="submit">Sign Up</button>
                                        </span>
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-7 col-md-push-5">
                                <div class="columns">
                                    <aside id="nav_menu-2" class="widget clearfix widget_nav_menu">
                                        <div class="body">
                                            <h4 class="widget-title">Find It Fast</h4>
                                            <div class="menu-footer-menu-1-container">
                                                <ul id="menu-footer-menu-1" class="menu">
                                                @php
                                                 $categories = DB::table('categories')->get();
                                                @endphp
                                                    @foreach($categories as $category)
                                                        <li class="menu-item"><a href="{{url('category/'.$category->id)}}">{{$category->category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div><!-- /.columns -->

                                <div class="columns">
                                    <aside id="nav_menu-4" class="widget clearfix widget_nav_menu">
                                        <div class="body">
                                            <h4 class="widget-title">Customer Care</h4>
                                            <div class="menu-footer-menu-3-container">
                                                <ul id="menu-footer-menu-3" class="menu">
                                                    @auth
                                                    <li class="menu-item"><a href="{{route('my_account')}}">My Account</a></li>
                                                    @endauth
                                                    <li class="menu-item"><a href="{{route('track_your_order')}}">Track your Order</a></li>
                                                    <li class="menu-item"><a href="{{route('wishlist')}}">Wishlist</a></li>
                                                   <li class="menu-item"><a href="{{route('faq')}}">FAQs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div><!-- /.columns -->

                            </div><!-- /.col -->

                            <div class="footer-contact col-xs-12 col-sm-12 col-md-5 col-md-pull-7">
                                <div class="footer-logo">
                                    <img width="175.748px" src="{{asset($settings->logo)}}" alt="">

                                </div><!-- /.footer-contact -->

                                <div class="footer-call-us">
                                    <div class="media">
                                        <span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
                                        <div class="media-body">
                                            <span class="call-us-text">Got Questions ? Call us 24/7!</span>
                                            <span class="call-us-number">{{$settings->phone}}</span>
                                        </div>
                                    </div>
                                </div><!-- /.footer-call-us -->


                                <div class="footer-address">
                                    <strong class="footer-address-title">Contact Info</strong>
                                    <address>{{$settings->address}}</address>

                                </div><!-- /.footer-address -->

                                <div class="footer-social-icons">
                                    <ul class="social-icons list-unstyled">
                                        <li><a class="fa fa-facebook" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-twitter" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-pinterest" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-linkedin" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-google-plus" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-tumblr" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-instagram" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-youtube" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-rss" href="#"></a></li>
                                        </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

               
            </footer><!-- #colophon -->



            <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/echo.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/noty.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/electro.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/assets/js/custome.js')}}"></script>


        @if(Session::get('msg'))
          <script type="text/javascript">
          new Noty({
              text: "{{Session::get('msg')['msg']}}",
              type: "{{Session::get('msg')['type']}}",
              timeout: 2000,
              theme: "relax"
          }).show();
          </script>
        @endif

    </body>
</html>
