@extends('layouts.app_frontend')

@section('content')
<div class="breadcrmb-wrap hidden-xs">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a> 
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Artikel</a> 
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!--end:Breadcrumbs -->
         <div class="blog-content m-t-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 blog">
                         @foreach ($data as $key => $artikel)
                        <div class="widget">
                            <div class="widget-body">
                                <a href="#" class="img-caption"> <img src="{{ asset('uploads/posts/original/'.$artikel->image) }}" class="img-responsive" alt=""></a>
                                <h3>{{ $artikel->title }}</h3>
                                <ul class="post-meta">
                                    <li><i class="ti-time"></i> {{ $artikel->created_at }}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <!-- end: Blog widget -->
                        
                        <!-- end: Blog widget -->
                        {!! $data->render() !!}
                    </div>
                    <!-- // col -->
                    <div class="col-md-4">
                        <div class="widget categories b-b-0">
                            <!-- /widget heading -->
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Blog Categories widget
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-heading">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search blog..."> <span class="input-group-btn">
                              <button class="btn btn-danger" type="button">
                              Search
                              </button>
                              </span> </div>
                            </div>
                            <div class="widget-body">
                                <!-- Sidebar navigation -->
                                <ul class="nav sidebar-nav">
                                    <li class="dropdown">
                                        <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown"> <i class="ti-shine">
                                 </i> Latest updates <span class="sidebar-badge">
                                 12
                                 </span> <b class="caret">
                                 </b> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="#" tabindex="-1">
                                       Promotions
                                       <span class="sidebar-badge">
                                       12
                                       </span>
                                       </a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="ti-gift">
                                 </i>Advertising <span class="sidebar-badge">
                                 3
                                 </span> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="ti-ticket">
                                 </i> Inspiration <span class="sidebar-badge badge-circle">
                                 12
                                 </span> </a>
                                    </li>
                                </ul>
                                <!-- Sidebar divider -->
                            </div>
                        </div>
                        <div class="widget">
                            <!-- /widget heading -->
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Popular tags
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-body">
                                <ul class="tags">
                                    <li> <a href="#" class="tag">
                                 Coupons
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Discounts
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Deals
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Shopname 
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Ebay
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Fashion
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Shoes
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Kids
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Travel
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Vacations
                                 </a> </li>
                                    <li> <a href="#" class="tag">
                                 Hosting
                                 </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget trending-coupons">
                            <!-- /widget heading -->
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Trending Coupons
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-left media-middle"> <img src="http://placehold.it/64x64" alt=""> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Upto 70% Rewards</h4>
                                        <p>Up to 70% off on Clothing ...</p>
                                    </div>
                                </div>
                                <!--/coupon media -->
                                <div class="media">
                                    <div class="media-left media-middle"> <img src="http://placehold.it/64x64" alt=""> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Upto 70% Rewards</h4>
                                        <p>Up to 70% off on Clothing ...</p>
                                    </div>
                                </div>
                                <!--/coupon media -->
                                <div class="media">
                                    <div class="media-left media-middle"> <img src="http://placehold.it/64x64" alt=""> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Up to 50% off Mens Summer Essentials at Clothing</h4>
                                        <p>Up to 70% off on Clothing ...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- // widget body -->
                        </div>
                        <div class="widget">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Inspirational Quote
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-body blog-quote">
                                <p>"Yo sociis shiznit penatibizzle magnizzle crackalackin sure montes, check it out ridiculus"</p> <cite>— &nbsp;&nbsp; Codenpixel<span>The Founder and Coowner</span></cite>
                                <ul class="bq-social list-unstyled">
                                    <li><a href="#"><i class="ti-facebook"></i></a> </li>
                                    <li><a href="#"><i class="ti-twitter"></i></a> </li>
                                    <li><a href="#"><i class="ti-google"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
