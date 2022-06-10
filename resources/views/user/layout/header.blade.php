@php
$settings = DB::table('settings')->first();
@endphp
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$settings->name}}</title>

        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-electro.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl-carousel.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/colors/yellow.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/noty.css')}}" media="all" />

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav-icon.png')}}">
    </head>

    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<div class="top-bar">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li id="test" class="menu-item animate-dropdown"><a title="{{$settings->discription}}" href="#">{{$settings->discription}}</a></li>
                        </ul>
                    </nav>

                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Track Your Order" href="{{route('track_your_order')}}"><i class="ec ec-transport"></i>Track Your Order</a></li>
							@auth
							<li class="menu-item animate-dropdown"><a title="My Account" href="{{url('my_account')}}"><i class="ec ec-user"></i>My Account</a></li>
							<li class="menu-item animate-dropdown"><a title="Logout" href="{{route('logout')}}"><i class="ec ec-user"></i>Logout</a></li>
							@else
							<li class="menu-item animate-dropdown"><a title="Login/Register" href="{{route('login')}}"><i class="ec ec-user"></i>Login/Register</a></li>
							@endauth
							
                            @if(Auth::check() && Auth::user()->role_id == 2)
                            <li class="menu-item animate-dropdown"><a title="Admin Panel" href="{{url('admin')}}"><i class="ec ec-user"></i>Admin Panel</a></li>
                            @endif
            				@auth
							@endauth
                        </ul>
                    </nav>
                </div>
            </div><!-- /.top-bar -->

            <header id="masthead" class="site-header header-v3">
                <div class="container">
                    <div class="row">

                        <!-- ============================================================= Header Logo ============================================================= -->
                        <div class="header-logo">
                        	<a href="{{route('home')}}" class="header-logo-link">
								<img width="175.748px" src="{{asset($settings->logo)}}" alt="">

                        	</a>
                        </div>
                        <!-- ============================================================= Header Logo : End============================================================= -->

                        <form class="navbar-search" method="get" action="/">
                        	<label class="sr-only screen-reader-text" for="search">Search for:</label>
                        	<div class="input-group">
                        		<input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                        		<div class="input-group-addon search-categories">
                        			<select name='product_cat' id='product_cat' class='postform resizeselect' >
										@php
											$subcategories = DB::table('subcategories')->get();
										@endphp
                        				<option value='0' selected='selected'>All Categories</option>
										@foreach($subcategories as $subcategory)
                        				<option class="level-0" value="laptops-laptops-computers">{{$subcategory->subcategory_name}}</option>
										@endforeach
                        				</select>
                        		</div>
                        		<div class="input-group-btn">
                        			<input type="hidden" id="search-param" name="post_type" value="product" />
                        			<button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                        		</div>
                        	</div>
							<div class="search-bar"></div>
                        </form>

						<ul class="navbar-cart nav navbar-nav pull-right flip">
                        	<li class="nav-item">
                        		<a href="{{route('cart')}}" class="nav-link"><i class="ec ec-shopping-bag"></i></a>
                        	</li>
                        </ul>


                        <ul class="navbar-compare nav navbar-nav pull-right flip">
                        	<li class="nav-item">
                        		<a href="{{route('wishlist')}}" class="nav-link"><i class="ec ec-favorites"></i></a>
                        	</li>
                        </ul>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </header><!-- #masthead -->

            <nav class="navbar navbar-primary navbar-full yamm">
            	<div class="container">
            		<div class="clearfix">
            			<button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#header-v3">
            				&#9776;
            			</button>
            		</div>

            		<div class="collapse navbar-toggleable-xs" id="header-v3">
            			<ul class="nav navbar-nav">
						    @php
                              $categories = DB::table('categories')->get();

							@endphp
							@foreach($categories as $category)
            				<li class="menu-item
            				animate-dropdown"><a title="{{$category->category_name}}" href="{{url('category/'.$category->id)}}">{{$category->category_name}}</a></li>
							@endforeach


            			</ul>
            		</div><!-- /.collpase -->
            	</div><!-- /.-container -->
            </nav><!-- /.navbar -->
