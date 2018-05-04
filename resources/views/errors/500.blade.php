@extends('layouts.app')

@section('content')
    <section class="page-header dark">
        <div class="container">

            <h1>Internal Server Error</h1>

            <!-- breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Error 500</li>
            </ol><!-- /breadcrumbs -->

        </div>
    </section>
    <section class="section-xlg">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-6 hidden-xs-down">

                    <div class="error-404">
                        500
                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <h3 class="m-0">Sorry, <strong>Internal Server Error</strong></h3>
                    <p class="mt-0 fs-20 font-lato text-muted">The Web server (running the Web Site) encountered an unexpected condition that prevented it from fulfilling the request by the client (e.g. your Web browser or our CheckUpDown robot) for access to the requested URL.</p>

                    <!-- INLINE SEARCH -->
                    <div class="inline-search clearfix mb-60">
                        <form action="" method="get" class="widget_search">
                            <input type="search" placeholder="Search..." id="s" name="s" class="serch-input">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            <div class="clear"></div>
                        </form>
                    </div>
                    <!-- /INLINE SEARCH -->

                    <div class="divider mb-0"><!-- divider --></div>

                    <a class="fs-16 font-lato" href="/"><i class="glyphicon glyphicon-menu-left mr-10 fs-12"></i> back to homepage now!</a>

                </div>

            </div>

        </div>
    </section>

@endsection