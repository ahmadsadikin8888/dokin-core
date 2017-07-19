@extends('layouts.app_frontend')

@section('content')
<div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Main component for a primary marketing message or call to action -->
                     <div class="slide-wrap shadow">
                        <div class="main-slider">
                            @foreach ($slides as $key => $slide)
                            <a href="{{ url('/').$slide->link }}" class="item" data-hash="{{ $slide->id }}"> <img src="{{asset('uploads/slides/original/'.$slide->image)}}" alt=""> </a>
                           @endforeach
                        </div>
                        <!-- /.carosuel -->
                        <div class="carousel-tabs clearfix">
                             @foreach ($slides as $key => $slide)
                             <a class="col-sm-4 tab url" href="#{{ $slide->id }}">
                              <div class="media">
                                 <div class="media-left media-middle"> <img src="{{asset('uploads/slides/thumbnail/'.$slide->image)}}" alt=""> </div>
                                 <div class="media-body">
                                    <h4 class="media-heading">Upto 30% Rewards</h4>
                                    <p>Up to 70% off on Clothing ...</p>
                                 </div>
                              </div>
                           </a>
                            @endforeach
                           
                        </div>
                     </div>
                     <!--/slide wrap -->
                  </div>
                  <!-- /col 12 -->
               </div>
               <div class="row">
                  <div class="col-lg-8">
                     <ul class="nav nav-tabs responsive-tabs" id="myTab">
                        <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-bar-chart"></i>Popular </a> </li>
                      </ul>
                     <div class="tab-content clearfix" id="myTabContent">
                        <div id="popular" class="tab-pane counties-pane active animated fadeIn">
                             @foreach ($produks as $key => $produk)
                           <div class="coupon-wrapper row">
                              <div class="coupon-data col-sm-3 text-center">
                                 <div class="savings text-center">
                                    <div>
                                         <img class="img-circle" src="{{ asset('uploads/produks/thumbnail/'.$produk->image_1) }}" alt="">
                                       
                                    </div>
                                 </div>
                                 <!-- end:Savings -->
                              </div>
                              <!-- end:Coupon data -->
                              <div class="coupon-contain col-sm-6">
                                 <ul class="list-inline list-unstyled">
                                    <li><span class="used-count">ID 25484</span> </li>
                                   
                                 </ul>
                                <h4 class="coupon-title"><a href="#">{{ substr($produk->title,0,30)."..."  }}</a></h4>
                                <p data-toggle="collapse" data-target="#more">{{ substr($produk->description,0,70)."..." }}</p>
                               
                                 <!-- end:Coupon details -->
                              </div>
                              <!-- end:Coupon cont -->
                              <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">== Go</span> <span class="btn-hover">Detail</span> </p>
                                 </div>
                           </div>
                           <!-- end: coupon wrap -->
                          @endforeach
                           <!-- end: coupon wrap -->
                        </div>
                     </div>
                     <!-- end: Tab content -->
                     <div class="clearfix"></div>
                     
                     <!-- end: Tab content -->
                  </div>
                  <div class="col-lg-4">
                     
                     <div class="widget trending-coupons">
                        <!-- /widget heading -->
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Trending Articles
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                         @foreach ($artikels as $key => $artikel)
                        <div class="widget-body">
                           <div class="media">
                              <div class="media-left media-middle"> <img src="{{ asset('uploads/posts/thumbnail/'.$artikel->image) }}" alt=""> </div>
                              <div class="media-body">
                                 <h4 class="media-heading">{{ $artikel->title }}</h4>
                                 <p>{{ $artikel->created_at }}</p>
                              </div>
                           </div>
                        </div>
                         @endforeach
                        <!-- // widget body -->
                     </div>
                     <!-- /widget -->
                  </div>
                  <!-- end col -->
               </div>
               <!-- End row -->
            </div>
            <section class="call-to-action">
               <div class="container">
                  <div class="row explain_group">
                     <div class="col-md-4">
                        <a class="item" rel="nofollow" href="#">
                           <div class="box-icon"> <i class="bg-danger ti-search"></i> </div>
                           <div class="box-info">
                              <h3>Search coupons</h3>
                              <h4>Find best money-saving coupons.</h4>
                              <div class="point"><i class="ti-check"></i><span>Find fresh coupons</span> </div>
                              <div class="point"><i class="ti-check"></i><span>Top Coupons & Offers</span> </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a class="item" rel="nofollow" href="#">
                           <div class="box-icon"> <i class="bg-info ti-shopping-cart-full"></i> </div>
                           <div class="box-info">
                              <h3>Save your money</h3>
                              <h4>Find best money-saving coupons.</h4>
                              <div class="point"><i class="ti-check"></i><span>Find fresh coupons</span> </div>
                              <div class="point"><i class="ti-check"></i><span>Top Coupons & Offers</span> </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4">
                        <a class="item" rel="nofollow" href="#">
                           <div class="box-icon"> <i class="bg-purple ti-gift"></i> </div>
                           <div class="box-info">
                              <h3>Earn your gifts</h3>
                              <h4>Find best money-saving coupons.</h4>
                              <div class="point"><i class="ti-check"></i><span>Find fresh coupons</span> </div>
                              <div class="point"><i class="ti-check"></i><span>Top Coupons & Offers</span> </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
            <section class="newsletter-alert">
               <div class="container text-center">
                  <div class="col-sm-12">
                     <div class="newsletter-form">
                        <h4><i class="ti-email"></i>Sign up for our weekly email newsletter with the best money-saving coupons.</h4>
                        <div class="input-group">
                           <input type="text" class="form-control input-lg" placeholder="Email"> <span class="input-group-btn">
                           <button class="btn btn-danger btn-lg" type="button">
                           Subscribe
                           </button>
                           </span> 
                        </div>
                        <p><small>We’ll never share your email address with a third-party.</small> </p>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Newsletter signup -->
@endsection
