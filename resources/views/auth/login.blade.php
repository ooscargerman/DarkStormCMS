@extends('layouts.app')

@section('content')


<section style="background:url('https://i.imgur.com/rZ1i2jT.jpg')">
            
                <div class="display-table">
                    <div class="display-table-cell vertical-align-middle">
                        
                        <div class="container">
                            
                            <div class="row">

                                <div class="col-12 col-sm-5 col-md-5 col-lg-4 order-md-2 order-sm-2 order-lg-2">

                                    <!-- ALERT -->
                                    <!--
                                    <div class="alert alert-mini alert-danger mb-30">
                                        <strong>Oh snap!</strong> Login Incorrect!
                                    </div>
                                    -->
                                    <!-- /ALERT -->

                                    <!-- login form -->
                                    <form action="index.html" method="post" class="sky-form boxed">
                                        <header><i class="fa fa-users"></i> Sign In</header>
                                        
                                        <fieldset class="m-0">  
                                        
                                            <label style="color:white;" class="label mt-20">E-mail</label>
                                            <label class="input">
                                                <i class="ico-append fa fa-envelope"></i>
                                                <input type="email">
                                                <span class="tooltip tooltip-top-right">Email Address</span>
                                            </label>
                                        
                                            <label style="color:white;" class="label mt-20">Password</label>
                                            <label class="input">
                                                <i class="ico-append fa fa-lock"></i>
                                                <input type="password">
                                                <b class="tooltip tooltip-top-right">Type your Password</b>
                                            </label>
                                            <label style="color:white;" class="checkbox mt-20">
                                                <input type="checkbox" name="checkbox-inline">
                                                <i></i> Keep me logged in
                                                </label>

                                        </fieldset>

                                        <footer class="celarfix">
                                            <button type="submit" class="btn btn-primary rad-0 float-right"><i class="fa fa-check"></i> {{ __('LOGIN') }}</button>
                                            <div class="login-forgot-password float-left">
                                                <a href="page-password.html">Forgot password?</a>
                                            </div>
                                        </footer>
                                    </form>
                                    <!-- /login form -->

                                    <div class="socials m-top10 text-center"><!-- more buttons: ui-buttons.html -->
                                        <a href="#" class="social-icon social-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon social-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon social-google" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google">
                                            <i class="icon-google-plus"></i>
                                            <i class="icon-google-plus"></i>
                                        </a>

                                    </div>

                                </div>

                                <div class="col-12 col-md-7 col-sm-7 col-lg-8 order-md-1 order-sm-1 order-lg-1">


                                    <h2 style="color:white; class="fs-20 text-center-xs">Why DarkStorm?</h2>

                                    <p style="color:white;">Lorem ipsum dolor sit amet. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.Lorem ipsum dolor sit amet. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>

                                    <ul style="color:#00FFFF;" class="list-unstyled login-features">
                                        <li>
                                            <i class="fa fa-gamepad"></i> <strong>Lorem ipsum</strong> dolor sit amet.
                                        </li>
                                        <li>
                                            <i class="fa fa-rocket"></i> <strong>Sed ut perspiciatis</strong> unde omnis iste.
                                        </li>
                                        <li>
                                            <i class="fa fa-trophy"></i> <strong>Et harum quidem</strong> rerum facilis est et expedita distinctio. 
                                        </li>
                                        <li>
                                            <i class="glyphicon glyphicon-screenshot"></i> <strong>Nam libero</strong> tempore, cum soluta nobis.
                                        </li>
                                        <li>
                                            <i class="glyphicon glyphicon-fire"></i> <strong>Est eligendi</strong> voluptatem accusantium.
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <!-- -->
            <section>
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                                    @if ($errors->has('email'))
                                
                                    <div class="alert alert-danger margin-bottom-30">
                                          <button type="button" class="close" data-dismiss="alert">
                                             <span aria-hidden="true">×</span>
                                           <span class="sr-only">Close</span>
                                          </button>
                                              <strong> Error: </strong> {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                    @if ($errors->has('password'))
                                
                                    <div class="alert alert-danger margin-bottom-30">
                                          <button type="button" class="close" data-dismiss="alert">
                                             <span aria-hidden="true">×</span>
                                           <span class="sr-only">Close</span>
                                          </button>
                                              <strong> Error: </strong> {{ $errors->first('password') }}
                                    </div>
                                    @endif

                                    <div class="box-static box-transparent box-bordered padding-30">
                                        <div class="box-title margin-bottom-30">
                                            <h2 class="size-20">I'm a returning player</h2>
                                        </div>

                                        
                                             <form method="POST" class="sky-form" autocomplete="off" action="{{ route('login') }}">
                                                @csrf
                                            <div class="clearfix">

                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label style="color:white;">Email</label>

                                          


                                                    <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-envelope"></i>
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                                    </label>

                                                </div>

                                                <!-- Password -->
                                                <div class="form-group">
                                                    <label style="color:white;">Password</label>
                                                    <label class="input margin-bottom-10">
                                                        <i class="ico-append fa fa-lock"></i>
                                                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                        <b class="tooltip tooltip-bottom-right">Type your account password</b>
                                                    </label>
                                                </div>
                                                <!-- Password -->
                                                <div class="form-group">
                                                   
                                                    <label style="color:white;" class="checkbox fw-300">
                                        <input type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                                        <i></i> {{ __('Remember Me') }}
                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    
                                                    <!-- Inform Tip -->                                        
                                                    <div class="form-tip pt-20">
                                                        <a class="no-text-decoration size-13 margin-top-10 block" href="{{ route('password.request') }}">  {{ __('Forgot Your Password?') }}</a>
                                                    </div>
                                                    
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                                                    <button class="btn btn-primary"><i class="fa fa-check"></i>   {{ __('LOGIN') }}</button>

                                                </div>

                                            </div>

                                        </form>

                                        <hr>

                                        <div class="text-center">
                                            <div class="margin-bottom-20">– OR –</div>
                                            
                                            <a class="btn btn-block btn-social btn-facebook margin-top-10">
                                                <i class="fa fa-facebook"></i> Sign in with Facebook
                                            </a>

                                            <div class="margin-top-30 text-center">
                                <a href="{{ route('register') }}" class="btn btn-featured btn-warning">
                                    <span>REGISTER</span>
                                    <i class="fa fa-user-plus"></i>
                                    </a>

                            </div>

                                        </div>

                                    </div>

                                </div>
                    
                    </div>
                    
                </div>
            </section>
            <!-- / -->



@endsection
