<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DarkStorm') }}</title>


        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- SWIPER SLIDER -->
        <link href="{{ asset('assets/plugins/slider.swiper/dist/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />

        <!--  CSS -->
       <link href="{{ asset('assets/css/essentials.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/layout.css') }}" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="{{ asset('assets/css/header-1.css') }}" rel="stylesheet" type="text/css" />
        @auth
       @if (Auth::user()->company_id == 1)
<link href="{{ asset('assets/css/color_scheme/blue.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
 @elseif (Auth::user()->company_id == 2)  
<link href="{{ asset('assets/css/color_scheme/red.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
@else
<link href="{{ asset('assets/css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
 @endif
 @endauth 

     

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   

    
</head>
<body>
   
                        @guest
                           <link id="css_dark_skin" href="{{ asset('assets/css/index.css') }}" rel="stylesheet" type="text/css" title="dark">
                        @else
                          <link id="css_dark_skin" href="{{ asset('assets/css/layout-dark.css') }}" rel="stylesheet" type="text/css" title="dark">
                        <div id="header" class="sticky header-sm clearfix">

               
                <!-- Top Bar -->
            <div id="topBar" class="">

                <div class="container">
                    
                                            <ul class="top-links list-inline pull-left">
                    <?php date_default_timezone_set("America/Phoenix"); 
                                            echo "Server Time: ".date("h:i:sa "); 
                                            ?>
                    </ul>
                    <ul class="top-links list-inline pull-right">

                    <li class="text-welcome hidden-xs">ID:<strong> {{ Auth::user()->id }}</strong></li>
                        <li class="text-welcome hidden-xs"><strong> {{ Auth::user()->username }} </strong></li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">MY ACCOUNT {{ Auth::user()->company_id }}</a>
                            <ul class="dropdown-menu pull-right">
                                <li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> WISHLIST</a></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> SETTINGS</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                            </ul>
                        
                        </li>
                        
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
                            <ul class="dropdown-langs dropdown-menu pull-right">
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/es.png" width="16" height="11" alt="lang" /> SPANISH</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/fr.png" width="16" height="11" alt="lang" /> FRABÇAIS</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/de.png" width="16" height="11" alt="lang" /> DEUTSCH</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/pt.png" width="16" height="11" alt="lang" /> PORTUGUÊS</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/tr.png" width="16" height="11" alt="lang" /> TÜRKÇE</a></li>
                            </ul>
                        
                        </li>
                    </ul>

                    
                </div>


                <div class="border-top block clearfix">
                    <div class="container">

                        <!-- Logo -->
                        <a class="logo has-banner pull-left text-center-md" href="index.html">
                            <img src="https://i.imgur.com/DxTepyV.png" alt="" />
                        </a>

                        <a class="banner pull-right hidden-sm hidden-xs" href="#">
                            <img src="http://placehold.it/728x90">
                        </a>
                    </div>
                </div>

            </div>
            <!-- /Top Bar -->
                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        
                       
                        <div class="navbar-collapse pull-left nav-main-collapse collapse nopadding-left nopadding-right">
                            <nav class="nav-main">

                                
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="dropdown"><!-- HOME -->
                                        <a href="/home">
                                           <i class="glyphicon glyphicon-home"></i> HOME
                                        </a>
                                      
                                    </li>
                                    <li class="dropdown"><!-- PAGES -->
                                        <a  href="#">
                                            <i class="fa fa-rocket"></i>  EQUIPMENT
                                        </a>
                                
                                    </li>
                                    <li class="dropdown"><!-- FEATURES -->
                                        <a  href="/clan">
                                           <i class="fa fa-group"></i> CLAN
                                        </a>
                                      
                                    </li>
                                   <li class="dropdown"><!-- FEATURES -->
                                        <a  href="#">
                                           <i class="glyphicon glyphicon-star"></i> PREMIUM <span class="label label-warning">NEW </span>
                                        </a>
                                      
                                    </li>
                                    <li class="dropdown"><!-- BLOG -->
                                        <a class="dropdown-toggle" href="#">
                                           <i class="fa fa-shopping-basket"></i>  SHOP
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/shop"><i class="fa fa-rocket"></i> SHIPS</a></li>
                                            <li><a href="/shop/drones"><i class="fa fa-dot-circle-o"></i> DRONES</a></li>
                                            <li><a href="shortcode-animations.html"><i class="et-expand"></i> ANIMATIONS</a></li>

                                        </ul>
                                    </li>
                                     
                                   
                                      <li class=" mega-menu"><!-- SHORTCODES -->
                                        <a href="#">
                                            <button type="button" class="btn btn-success btn-3d"><i class="glyphicon glyphicon-play"></i>START</button>
                                        </a>
                                      
                                    </li>
                                    <li class=" mega-menu"><!-- SHORTCODES -->
                                        <a href="#">
                                            <button type="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger btn-3d"><i class="glyphicon glyphicon-off"></i>{{ __('LOGOUT') }}</button>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </a>
                                      
                                    </li>
                                    
                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>
      @endguest       

<body class="smoothscroll enable-animation">

    


             @guest
               <!-- wrapper -->
        <div id="wrapper">

<section class="page-header page-header-xs">
                
             
      <center><h1><img class="footer-logo" src="https://i.imgur.com/DxTepyV.png" height="150" width="200" alt="" /></h1></center>

                    @endguest 
  </section>
                     @yield('content')
              
      
            <!-- FOOTER -->
            <footer id="footer">
                

                <div class="copyright">
                    <div class="container">

                        <ul class="pull-right nomargin list-inline mobile-block">
                                    <!-- Social Icons -->
                            <div class="margin-top-20">
                                <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                    
                            </div>
                            <!-- /Social Icons -->
                        </ul>
                        Powered By:
                        <img class="footer-logo" src="http://es.boombang.be/logo.png" alt="" width="200px" />
                        &copy; All Rights Reserved, Company LTD
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-2.2.3.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
    

        <!-- SWIPER SLIDER -->
        <script type="text/javascript" src="{{ asset('assets/plugins/slider.swiper/dist/js/swiper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/view/demo.swiper_slider.js') }}"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        
</body>
</html>
