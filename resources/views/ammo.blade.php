@extends('layouts.app')

@section('content')

    <link href="{{ asset('assets/css/layout-shop.css')}}" rel="stylesheet" type="text/css" />

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

                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <ul class="shop-item-list row list-inline nomargin">
                    @foreach($ammos as $ammo)
                        <!-- ITEM -->
                            <li class="col-lg-3 col-sm-3">

                                <div class="shop-item">

                                    <div class="thumbnail">
                                        <!-- product image(s) -->
                                        <a class="shop-item-image">
                                            <img class="img-responsive" src="/assets/images/shop/ships/{{$ammo->image}}"  />
                                            <img class="img-responsive" src="/assets/images/shop/ships/{{$ammo->image}}" />
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
                                        <h2>{{$ammo->name}}</h2>

                                        <!-- price -->
                                        <div class="shop-item-price">
                                            <h5>{{$ammo->price}} @if ($ammo->currency == "uridium") <small style="font-color:white;"><i class="glyphicon glyphicon-magnet"></i></small>@else <i class="glyphicon glyphicon-copyright-mark"></i> @endif</h5>
                                        </div>
                                        <!-- /price -->
                                    </div>
                                    <!-- buttons -->
                                    <form method="POST" action="{{ route('ammo') }}">
                                        @csrf
                                        <input name="id" value="{{$ammo->loot_id}}" class="hidden"/>
                                        <div class="shop-item-buttons text-center">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-cart-plus"></i> Buy</button>
                                        </div>
                                    </form>
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
                        {{ $ammos->links() }}
                    </div>
                    <!-- /Pagination Default -->

                </div>


                <!-- LEFT -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-6 col-md-pull-6 col-sm-pull-6" style="
                        background-color: #212121;
                        opacity:  0.8;
                        border-radius: 5px;">

                    <!-- CATEGORIES -->
                    <div class="side-nav margin-bottom-60">

                        <div class="side-nav-head">
                            <h3><i class="fa fa-sort-amount-desc"></i> CATEGORIES</h3>
                        </div>

                        <ul class="list-group list-group-bordered list-group-noicon uppercase">
                            <li class="list-group-item"><a href="/shop"><span class="size-11 text-muted pull-right">({{ $ships_total }})</span> SHIPS</a></li>
                            <li class="list-group-item"><a href="/shop/drones"><span class="size-11 text-muted pull-right">({{ $drones_total }})</span> DRONES</a></li>
                            <li class="list-group-item"><a href="/shop/equipment"><span class="size-11 text-muted pull-right">({{ $equipment_total }})</span> EQUIPMENT</a></li>
                            <li class="list-group-item active"><a href="/shop/ammo"><span class="size-11 text-muted pull-right">({{ $ammo_total }})</span> AMMO</a></li>
                            <li class="list-group-item"><a href="/shop/extras"><span class="size-11 text-muted pull-right">({{ $extras_total }})</span> EXTRAS</a></li>
                            <li class="list-group-item"><a href="/shop/designs"><span class="size-11 text-muted pull-right">({{ $designs_total }})</span> DESIGNS</a></li>
                        </ul>

                    </div>
                    <!-- /CATEGORIES -->







                </div>

                <!-- RIGHT -->
                <div class="col-lg-3 col-md-3 col-sm-3">




                    <!-- HTML BLOCK -->
                    <div class="margin-bottom-60">
                        <h4>ADS</h4>
                        <img src="http://placehold.it/300x600">

                    </div>
                    <!-- /HTML BLOCK -->

                </div>


            </div>

        </div>
    </section>
    <!-- / -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/js/view/demo.shop.js')}}"></script>

@endsection