@extends('layouts.app')

@section('content')

    <link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />

    <section>
        <div class="container">

            <div class="row">

                <!-- CENTER -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-lg-push-3 col-md-push-3 col-sm-push-3">


                    <!-- CAROUSEL -->
                    <div class="owl-carousel buttons-autohide controlls-over margin-bottom-30 radius-4" data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
                        <!-- item -->
                        <div>
                            <div class="caption-slider-default">
                                <div class="display-table">
                                    <div class="display-table-cell vertical-align-middle">
                                        <div class="caption-container text-left">
                                            <h2>SHOP <strong>NOW</strong> &ndash; 50% OFF</h2>
                                            <p>
                                                This is a category banner rotator<br />
                                                for any category of your shop.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="img-responsive radius-4" src="assets/images/demo/shop/banners/top_2.png" width="851" height="335" alt="">
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div>

                            <div class="caption-slider-default">
                                <div class="display-table">
                                    <div class="display-table-cell vertical-align-middle">
                                        <div class="caption-container text-left">
                                            <h2>LOREM IPSUM <strong>DOLOR</strong></h2>
                                            <p>
                                                Unlimited designs, unlimited combinations <br />
                                                imagination is the limit!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="img-responsive radius-4" src="assets/images/demo/shop/banners/top_1.png" width="851" height="335" alt="">
                        </div>
                        <!-- /item -->

                    </div>
                    <!-- /CAROUSEL -->


                    <!-- LIST OPTIONS -->
                    <div class="clearfix shop-list-options margin-bottom-20">

                        <ul class="pagination nomargin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>

                        <div class="options-left">
                            <select>
                                <option value="pos_asc">Position ASC</option>
                                <option value="pos_desc">Position DESC</option>
                                <option value="name_asc">Name ASC</option>
                                <option value="name_desc">Name DESC</option>
                                <option value="price_asc">Price ASC</option>
                                <option value="price_desc">Price DESC</option>
                            </select>

                            <a class="btn active fa fa-th" href="shop-4col-left.html"><!-- grid --></a>
                            <a class="btn fa fa-list" href="shop-1col-left.html"><!-- list --></a>
                        </div>

                    </div>
                    <!-- /LIST OPTIONS -->


                    <ul class="shop-item-list row list-inline nomargin">
                    @foreach($ships as $ship)
                        <!-- ITEM -->
                            <li class="col-lg-4 col-sm-4">

                                <div class="shop-item">

                                    <div class="thumbnail">
                                        <!-- product image(s) -->
                                        <a class="shop-item-image" href="shop-single-left.html">
                                            <img class="img-responsive" src="/assets/images/shop/ships/{{$ship->image}}" alt="shop first image" />
                                            <img class="img-responsive" src="/assets/images/shop/ships/{{$ship->image}}" alt="shop hover image" />
                                        </a>
                                        <!-- /product image(s) -->


                                        <!-- product more info -->
                                        <div class="shop-item-info">
                                            <!--  <span class="label label-success">NEW</span>
                                              <span class="label label-danger">SALE</span>-->
                                        </div>
                                        <!-- /product more info -->
                                    </div>

                                    <div class="shop-item-summary text-center">
                                        <h2>{{$ship->name}}</h2>

                                        <!-- price -->
                                        <div class="shop-item-price">
                                            <h5>{{$ship->price}} {{$ship->currency}}</h5>
                                        </div>
                                        <!-- /price -->
                                    </div>

                                    <!-- buttons -->
                                    <div class="shop-item-buttons text-center">
                                        <a class="btn btn-success" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Buy</a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- /buttons -->
                                </div>

                            </li>
                            <!-- /ITEM -->
                        
                    @endforeach



                    </ul>

                    <hr />

                    <!-- Pagination Default -->
                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- /Pagination Default -->

                </div>


                <!-- LEFT -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-6 col-md-pull-6 col-sm-pull-6">

                    <!-- CATEGORIES -->
                    <div class="side-nav margin-bottom-60">

                        <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                            <h4>CATEGORIES</h4>
                        </div>

                        <ul class="list-group list-group-bordered list-group-noicon uppercase">
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">WOMEN</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(123)</span> Shoes &amp; Boots</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(331)</span> Top &amp; Blouses</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(234)</span> Dresses &amp; Skirts</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">MEN</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Accessories</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(67)</span> Shoes &amp; Boots</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Dresses &amp; Skirts</a></li>
                                    <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(78)</span> Top &amp; Blouses</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">JEWELLERY</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(23)</span> Dresses &amp; Skirts</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(34)</span> Shoes &amp; Boots</a></li>
                                    <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(21)</span> Top &amp; Blouses</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Accessories</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <a class="dropdown-toggle" href="#">KIDS</a>
                                <ul>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(88)</span> Shoes &amp; Boots</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(22)</span> Dresses &amp; Skirts</a></li>
                                    <li><a href="#"><span class="size-11 text-muted pull-right">(31)</span> Accessories</a></li>
                                    <li class="active"><a href="#"><span class="size-11 text-muted pull-right">(18)</span> Top &amp; Blouses</a></li>
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(189)</span> ACCESSORIES</a></li>
                            <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(61)</span> GLASSES</a></li>

                        </ul>

                    </div>
                    <!-- /CATEGORIES -->







                </div>

                <!-- RIGHT -->
                <div class="col-lg-3 col-md-3 col-sm-3">




                    <!-- HTML BLOCK -->
                    <div class="margin-bottom-60">
                        <h4>HTML BLOCK</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus eunit.</p>


                    </div>
                    <!-- /HTML BLOCK -->

                </div>


            </div>

        </div>
    </section>
    <!-- / -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/view/demo.shop.js"></script>

    @endsection