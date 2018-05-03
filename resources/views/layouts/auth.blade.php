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
        <link href="{{ asset('assets/css/color_scheme/red.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />

       <link id="css_dark_skin" href="{{ asset('assets/css/layout-dark.css') }}" rel="stylesheet" type="text/css" title="dark">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   

    
</head>
<body>
   
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else

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

                    <li class="text-welcome hidden-xs">ID:<strong>12000</strong></li>
                        <li class="text-welcome hidden-xs"><strong>OscarG</strong></li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">MY ACCOUNT</a>
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
                            <img src="assets/images/logo_dark.png" alt="" />
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
                                        <a  href="#">
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
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    DEFAULT
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-default-aside-left.html">LEFT SIDEBAR</a></li>
                                                    <li><a href="blog-default-aside-right.html">RIGHT SIDEBAR</a></li>
                                                    <li><a href="blog-default-aside-both.html">BOTH SIDEBAR</a></li>
                                                    <li><a href="blog-default-fullwidth.html">FULL WIDTH</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    GRID
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-column-2colums.html">2 COLUMNS</a></li>
                                                    <li><a href="blog-column-3colums.html">3 COLUMNS</a></li>
                                                    <li><a href="blog-column-4colums.html">4 COLUMNS</a></li>
                                                    <li class="divider"></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    MASONRY
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-masonry-2colums.html">2 COLUMNS</a></li>
                                                    <li><a href="blog-masonry-3colums.html">3 COLUMNS</a></li>
                                                    <li><a href="blog-masonry-4colums.html">4 COLUMNS</a></li>
                                                    <li><a href="blog-masonry-fullwidth.html">FULLWIDTH</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    TIMELINE
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-timeline-aside-left.html">LEFT SIDEBAR</a></li>
                                                    <li><a href="blog-timeline-aside-right.html">RIGHT SIDEBAR</a></li>
                                                    <li><a href="blog-timeline-right-aside-right.html">RIGHT + TIMELINE RIGHT</a></li>
                                                    <li><a href="blog-timeline-right-aside-left.html">LEFT + TIMELINE RIGHT</a></li>
                                                    <li><a href="blog-timeline-fullwidth-left.html">FULL WIDTH - LEFT</a></li>
                                                    <li><a href="blog-timeline-fullwidth-right.html">FULL WIDTH - RIGHT</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    SMALL IMAGE
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-smallimg-aside-left.html">LEFT SIDEBAR</a></li>
                                                    <li><a href="blog-smallimg-aside-right.html">RIGHT SIDEBAR</a></li>
                                                    <li><a href="blog-smallimg-aside-both.html">BOTH SIDEBAR</a></li>
                                                    <li><a href="blog-smallimg-fullwidth.html">FULL WIDTH</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="blog-smallimg-alternate-1.html">ALTERNATE 1</a></li>
                                                    <li><a href="blog-smallimg-alternate-2.html">ALTERNATE 2</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    SINGLE
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-single-default.html">DEFAULT</a></li>
                                                    <li><a href="blog-single-aside-left.html">LEFT SIDEBAR</a></li>
                                                    <li><a href="blog-single-aside-right.html">RIGHT SIDEBAR</a></li>
                                                    <li><a href="blog-single-fullwidth.html">FULL WIDTH</a></li>
                                                    <li><a href="blog-single-small-image-left.html">SMALL IMAGE - LEFT</a></li>
                                                    <li><a href="blog-single-small-image-right.html">SMALL IMAGE - RIGHT</a></li>
                                                    <li><a href="blog-single-big-image.html">BIG IMAGE</a></li>
                                                    <li><a href="blog-single-fullwidth-image.html">FULLWIDTH IMAGE</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#">
                                                    COMMENTS
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-comments-bordered.html#comments">BORDERED COMMENTS</a></li>
                                                    <li><a href="blog-comments-default.html#comments">DEFAULT COMMENTS</a></li>
                                                    <li><a href="blog-comments-facebook.html#comments">FACEBOOK COMMENTS</a></li>
                                                    <li><a href="blog-comments-disqus.html#comments">DISQUS COMMENTS</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                     
                                   
                                      <li class=" mega-menu"><!-- SHORTCODES -->
                                        <a href="#">
                                            <button type="button" class="btn btn-success btn-3d"><i class="glyphicon glyphicon-play"></i>START</button>
                                        </a>
                                      
                                    </li>
                                    <li class=" mega-menu"><!-- SHORTCODES -->
                                        <a href="#">
                                            <button type="button" class="btn btn-danger btn-3d"><i class="glyphicon glyphicon-off"></i>LOGOUT</button>
                                        </a>
                                      
                                    </li>
                                    
                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>

                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
