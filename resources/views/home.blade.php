@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="info-bar info-bar-color">
        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    <i class="glyphicon glyphicon-magnet"></i>
                    <h3>2,000,000</h3>
                    <p>Uridium</p>
                </div>

                <div class="col-sm-6">
                    <i class="glyphicon glyphicon-copyright-mark"></i>
                    <h3>20,000,000</h3>
                    <p>Credits</p>
                </div>


            </div>

        </div>
    </div>

    </div>
    </section>
    <!-- /PAGE HEADER -->




    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6 col-md-offset">
                    <div class="heading-title heading-border-bottom heading-color">

                        <h2 class="size-20"><i class="glyphicon glyphicon-user"></i> PILOT LICENSE</h2>
                    </div>
                    <div class="price-clean">
                        <span class="pull-left "><img src="http://i.imgur.com/X1LKXGy.png"></span>
                        <h4>
                            {{Auth::user()->username}}
                        </h4>

                        <hr/>
                        <div class="col-md-6">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;">
                                    <span>60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <span class="pull-left "><img
                                        src="https://darkorbit-22.bpsecure.com/do_img/global/logos/logo_vru.png?__cv=5416ea953e8fcd0b83e50827a0059b00"></span>

                        </div>

                        <h5>Clan: Oscar</h5>
                        <h5>Rank: Oscar</h5>
                        <hr/>
                        <a href="#" class="btn btn-featured btn-success">
                            <span>START</span>
                            <i class="glyphicon glyphicon-play"></i>
                        </a>
                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-md-offset">
                    <div class="heading-title heading-border-bottom heading-color">

                        <h2 class="size-20"> PLAYERS BY COMPANY</h2>
                    </div>
                    <div class="price-clean">
                        <div class="alert bg-primary margin-bottom-30"><!-- INFO -->

                            EIC: 133
                        </div>
                        <div class="alert alert-danger margin-bottom-30"><!-- INFO -->
                            MMO: 133
                        </div>
                        <div class="alert bg-success margin-bottom-30"><!-- INFO -->

                            VRU: 133
                        </div>


                    </div>
                </div>


            </div>
            <br>
            <center><img src="http://placehold.it/728x90"></center>
            </br>
            <div class="row">

                <div class="col-md-6 col-sm-6 col-md-offset">
                    <div class="heading-title heading-border-bottom heading-color">

                        <h2 class="size-20"><i class="fa fa-signal"></i> RANKINGS</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th><i class="fa fa-hashtag pull-left hidden-xs"></i></th>
                                <th> Username</th>
                                <th> Company</th>
                                <th> Points</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Value 1</td>
                                <td>☆ĢĺĮŃţ☆</td>
                                <td>Value 3</td>
                                <td>Value 3</td>
                            </tr>
                            <tr>
                                <td>Value 1</td>
                                <td>•ƓƐƬ•OƑƑ•MƐ•[RƐƊƵ]</td>
                                <td>Value 3</td>
                                <td>Value 3</td>
                            </tr>
                            <tr>
                                <td>Value 1</td>
                                <td>†♕ĞυzzĬ♕†</td>
                                <td>Value 3</td>
                                <td>Value 3</td>
                            </tr>
                            <tr>
                                <td>Value 1</td>
                                <td>Value 2</td>
                                <td>Value 3</td>
                                <td>Value 3</td>
                            </tr>
                            <tr>
                                <td>Value 1</td>
                                <td>Value 2</td>
                                <td>Value 3</td>
                                <td>Value 3</td>
                            </tr>
                            <tr>
                                <td>Value 1</td>
                                <td>Value 2</td>
                                <td>Value 3</td>
                                <td>Value 3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-md-offset">
                    <div class="heading-title heading-border-bottom heading-color">
                        <h2 class="size-20"><i class="fa fa-newspaper-o"></i> NEWS</h2>
                    </div>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="https://sharedimages-ns.bpsecure.com/darkorbit/news/obsidian-box_201804.png"
                                     alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Noticia del diego</h5>
                                        <p style="color:white;">Es gay</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="https://sharedimages-ns.bpsecure.com/darkorbit/news/discordsocial.png"
                                     alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="https://i.imgur.com/wfeTDnw.jpg" alt="New york" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- / -->






    </body>
    </html>

@endsection
