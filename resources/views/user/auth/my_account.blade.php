@extends('user.layout.main')


@section('content')

    


<div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>My Account</nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article id="post-8" class="hentry">

                                <div class="entry-content">
                                    <div class="woocommerce">
                                        

                                            <div>

                                                <div class="col-1">

                                                    <h2>My account</h2>

                                                    <form method="post" class="login" action="{{route('update_profile')}}">
                                                        @csrf
                                                        <p class="before-login-text">Welcome back , {{Auth::user()->name}}! </p>

                                                        @error('name')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                        <p class="form-row form-row-wide">
                                                            <label for="name">Full name <span class="required text-danger">*</span></label>
                                                            <input value="{{Auth::user()->name}}" type="text" class="input-text" name="name" id="name"  />
                                                        </p>

                                                        @error('email')
                                                        <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                        <p class="form-row form-row-wide">
                                                            <label for="email">Email address<span class="required">*</span></label>
                                                            <input value="{{Auth::user()->email}}" type="text" class="input-text" name="email" id="email"  />
                                                        </p>
                                                        
                                                        <p class="form-row">
                                                            <input class="button" type="submit" value="Update profile" name="update">
                                                        </p>

                                                <!--         <p class="lost_password"><a href="login-and-register.html">Lost your password?</a></p>
                                                -->
                                                    </form>


                                                </div><!-- .col-2 -->

                                            </div><!-- .col2-set -->

                                        
                                    </div><!-- .woocommerce -->
                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .col-full -->
            </div><!-- #content -->



@endsection