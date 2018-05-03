@extends('layouts.app')

@section('content')
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
    <section>
        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-md-offset">
                    <div class="heading-title heading-border-bottom heading-color">

                        <h2 class="size-20"><i class="fa fa-users"></i> CREATE CLAN </h2>
                    </div>
                @if ($errors->has('name'))
                    <!-- ALERT -->

                        <div class="alert alert-danger margin-bottom-30">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong> Error: </strong> {{ $errors->first('name') }}
                        </div>
                        <!-- /ALERT -->
                    @endif
                @if ($errors->has('tag'))
                    <!-- ALERT -->

                        <div class="alert alert-danger margin-bottom-30">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong> Error: </strong> {{ $errors->first('tag') }}
                        </div>
                        <!-- /ALERT -->
                    @endif
                @if ($errors->has('description'))
                    <!-- ALERT -->

                        <div class="alert alert-danger margin-bottom-30">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong> Error: </strong> {{ $errors->first('description') }}
                        </div>
                        <!-- /ALERT -->
                    @endif
                    <form class="price-clean" method="POST" action="{{ route('clan') }}">
                        @csrf
                        <fieldset class="nomargin">
                            <div class="col-md-6">
                                <div class="fancy-form">
                                    <i class="fa fa-group"></i>
                                    <input type="text" class="form-control" maxlength="12" name="name" placeholder="Name" required>
                                    <!-- tooltip - optional, bootstrap tooltip can be used instead -->
                                    <span class="fancy-tooltip top-right"> <!-- positions: .top-left | .top-right -->
                                     <em>Max 12 characters</em>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fancy-form">
                                    <i class="fa fa-tag"></i>
                                    <input type="text" name="tag" maxlength="4" class="form-control" placeholder="Tag" required>
                                    <!-- tooltip - optional, bootstrap tooltip can be used instead -->
                                    <span class="fancy-tooltip top-right"> <!-- positions: .top-left | .top-right -->
                                     <em>Max 4 characters</em>
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="fancy-form">
                                    <textarea name="description" rows="5" class="form-control word-count" data-maxlength="200"
                                              data-info="textarea-words-info" placeholder="Description"></textarea>

                                    <i class="fa fa-comments"><!-- icon --></i>

                                    <span class="fancy-hint fs-11 text-muted">
		                                <strong>Hint:</strong> 200 characters allowed!

	                                </span>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-featured btn-success">
                                        <span>CREATE</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>

                        </fieldset>


                    </form>
                </div>


            </div>
            @foreach($clans as $clanxd)
                {{$clanxd->id}}
                {{$clanxd->name}}
                {{$clanxd->tag}}
            @endforeach
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