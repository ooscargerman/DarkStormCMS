@extends('layouts.app')

@section('content')




            <!-- -->
            <section>
                <div class="container">
                    
                    <div class="row">

                        <!-- LOGIN -->
                        <div class="col-md-6 col-sm-6">
                            @if ($errors->has('username'))
                            <!-- ALERT -->
                            
                                    <div class="alert alert-danger margin-bottom-30">
                                          <button type="button" class="close" data-dismiss="alert">
                                             <span aria-hidden="true">×</span>
                                           <span class="sr-only">Close</span>
                                          </button>
                                              <strong> Error: </strong> {{ $errors->first('username') }}
                                    </div>
                            <!-- /ALERT -->
                                   
                            @endif
                            @if ($errors->has('email'))
                                   <!-- ALERT -->
                            
                                    <div class="alert alert-danger margin-bottom-30">
                                          <button type="button" class="close" data-dismiss="alert">
                                             <span aria-hidden="true">×</span>
                                           <span class="sr-only">Close</span>
                                          </button>
                                              <strong> Error: </strong> {{ $errors->first('email') }}
                                    </div>
                            <!-- /ALERT -->
                            @endif
                             @if ($errors->has('password'))
                                   <!-- ALERT -->
                            
                                    <div class="alert alert-danger margin-bottom-30">
                                          <button type="button" class="close" data-dismiss="alert">
                                             <span aria-hidden="true">×</span>
                                           <span class="sr-only">Close</span>
                                          </button>
                                              <strong> Error: </strong> {{ $errors->first('password') }}
                                    </div>
                            <!-- /ALERT -->
                            @endif
                            @if ($errors->has('g-recaptcha-response'))
                                   <!-- ALERT -->
                            
                                    <div class="alert alert-danger margin-bottom-30">
                                          <button type="button" class="close" data-dismiss="alert">
                                             <span aria-hidden="true">×</span>
                                           <span class="sr-only">Close</span>
                                          </button>
                                              <strong> Error: </strong> {{ $errors->first('g-recaptcha-response') }}
                                    </div>
                            <!-- /ALERT -->
                            @endif
                            

                            <!-- register form -->
                            <form method="POST"  class="nomargin sky-form boxed" action="{{ route('register') }}">
                                 @csrf
                                <header>
                                    <i class="fa fa-users"></i> Register
                                    </header>

                                <fieldset class="nomargin">       

                                    <label class="input margin-bottom-10">
                                        <i class="ico-append fa fa-user"></i>
                                         <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">
                                        
                                        <b class="tooltip tooltip-bottom-right">Insert a new username</b>
                                    </label>      
                                    <label class="input margin-bottom-10">
                                        <i class="ico-append fa fa-envelope"></i>
                                         <input id="email" placeholder="Email address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                                    </label>
                                
                                    <label class="input margin-bottom-10">
                                        <i class="ico-append fa fa-lock"></i>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                        <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                                    </label>
                                
                                    <label class="input margin-bottom-10">
                                        <i class="ico-append fa fa-lock"></i>
                                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
                                        <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                                    </label>
                                    <label class="select margin-bottom-10 margin-top-20">
                                        <select name="company" required>
                                            <option value="0" selected="" disabled="">Company</option>
                                            <option value="1">EIC</option>
                                            <option value="2">MMO</option>
                                            <option value="3">VRU</option>
                                        </select>
                                        <i></i>
                                    </label>
                                    
                                     <div class="margin-top-30">
                                           {!! NoCaptcha::renderJs() !!}
                                           {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                           </span>
                                         @endif
                                     </div> 

                                    <div class="margin-top-30">
                                    <div class="col-md-6">
                                        <label class="checkbox nomargin" style="color:white;"><input class="checked-agree" type="checkbox" name="checkbox" required=""><i></i>I agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms of Service</a></label>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-3d btn-lg"><i class="fa fa-check"></i> REGISTER</button>
                                    </div>
                                    </div>
                                </fieldset>

                                
                            </form>
                            <!-- /register form -->

                        </div>
                        <!-- /LOGIN -->

                        <!-- SOCIAL LOGIN -->
                        <div class="col-md-6 col-sm-6">
                            <form action="#" method="post" class="sky-form boxed">

                                <header class="size-18 margin-bottom-20">
                                    Register using your favourite social network
                                </header>
                                
                                <fieldset class="nomargin">

                                    <div class="row">
                                    
                                        <div class="col-md-8 col-md-offset-2">

                                            <a class="btn btn-block btn-social btn-facebook margin-bottom-10">
                                                <i class="fa fa-facebook"></i> Sign up with Facebook
                                            </a>
                                            
                                        </div>
                                        
                                    </div>

                                </fieldset>

                                <footer>
                                    Already have an account? <a href="/"><strong>Back to login!</strong></a>
                                </footer>

                            </form>

                        </div>
                        <!-- /SOCIAL LOGIN -->

                    </div>

                            </div>
                            
                           

            </section>
            <!-- / -->


@endsection
