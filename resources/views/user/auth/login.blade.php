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
                            <div class="customer-login-form">
                                <span class="or-text">or</span>

                                <div class="col2-set" id="customer_login">

                                <div class="col-1">

                                    <h2>Login</h2>

                                    <form name="login" method="post" class="login" action="{{route('login')}}">
                                        @csrf
                                        <p class="before-login-text">Welcome back! Sign in to your account</p>
                                        <p class="form-row form-row-wide">
                                            @error('email')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                            <label for="username">Username or email address<span class="required">*</span></label>
                                            <input type="text" class="input-text" name="email" id="username"  />
                                        </p>
                                                                                
                                        <p class="form-row form-row-wide">
                                            @error('password')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                            <label for="password">Password<span class="required">*</span></label>
                                            <input class="input-text" type="password" name="password" id="password" />
                                        </p>

                                        <p class="form-row">
                                            <input class="button" type="submit" value="Login" name="login">
                                            <label for="rememberme" class="inline"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me</label>
                                        </p>

                                       <!--  <p class="lost_password"><a href="login-and-register.html">Lost your password?</a></p> -->

                                    </form>


                                </div><!-- .col-1 -->



                                    <div class="col-2">

                                        <h2>Register</h2>

                                        <form name="register" method="post" class="register" action="{{route('register')}}">
                                        @csrf
                                            <p class="before-register-text">Create your very own account</p>
                                            @if($errors->register->first('name'))
                                            <div class="text-danger">{{$errors->register->first('name')}}</div>
                                            @endif
                                            <p class="form-row form-row-wide">
                                                <label for="name">Full name <span class="required text-danger">*</span></label>
                                                <input type="text" class="input-text" name="name" id="reg_email"  />
                                            </p>
                                           
                                            <p class="form-row form-row-wide">
                                            @if($errors->register->first('email'))
                                            <div class="text-danger">{{$errors->register->first('email')}}</div>
                                            @endif
                                                <label for="reg_email">Email address <span class="required text-danger">*</span></label>
                                                <input type="email" class="input-text" name="email" id="reg_email"  />
                                            </p>
                                            
                                            <p class="form-row form-row-wide">
                                            @if($errors->register->first('password'))
                                            <div class="text-danger">{{$errors->register->first('password')}}</div>
                                            @endif
                                                <label for="password">Password <span class="required text-danger">*</span></label>
                                                <input type="password" class="input-text" name="password" id="password"  />
                                            </p>
                                            
                                            <p class="form-row form-row-wide">
                                                <label for="password_confirmation">Confirm password  <span class="required text-danger">*</span></label>
                                                <input type="password" class="input-text" name="password_confirmation" id="reg_email"  />
                                            </p>

                                            <p class="form-row"><input type="submit" class="button" name="register" value="Register" /></p>

                                            <div class="register-benefits">
                                                <h3>Sign up today and you will be able to :</h3>
                                                <ul>
                                                    <li>Speed your way through checkout</li>
                                                    <li>Track your orders easily</li>
                                                    <li>Keep a record of all your purchases</li>
                                                </ul>
                                            </div>

                                        </form>

                                    </div><!-- .col-2 -->

                                </div><!-- .col2-set -->

                            </div><!-- /.customer-login-form -->
                        </div><!-- .woocommerce -->
                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div><!-- .col-full -->
</div><!-- #content -->


@endsection