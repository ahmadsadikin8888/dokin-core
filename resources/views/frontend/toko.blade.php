@extends('layouts.app_frontend')

@section('content')
<div class="breadcrmb-wrap hidden-xs">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a> 
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Produks</a> 
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!--end:Breadcrumbs -->
         <section class="results">
            <div class="blog-content m-t-40">
            <div class="container">
               <div class="row">
                  <!--/col -->
                  <div class="col-sm-12">
                     <div class="widget-body">
                        <div class="widget">
                           <ul class="nav nav-tabs solo-nav responsive-tabs" id="myTab">
                              <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-bar-chart"></i>Popular </a> </li>
                           </ul>
                        </div>
                     </div>
                     <!--/widget -->
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane single-coupon active" id="popular">
                            @foreach ($data as $key => $produk)
                           <div class="coupon-wrapper coupon-single">
                              <div class="row">
                                 <!--<div class="ribbon-wrapper hidden-xs">
                                    <div class="ribbon">Featured</div>
                                 </div>-->
                                 <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                       <div>
                                          <img class="img-circle" src="{{ asset('uploads/produks/thumbnail/'.$produk->image_1) }}" alt="">
                                       </div>
                                    </div>
                                    <!-- end:Savings -->
                                 </div>
                                 <!-- end:Coupon data -->
                                 <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                       <!--<li class="sale label label-pink">Sale</li>
                                       <li class="popular label label-success">98% success</li>
                                       <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>-->
                                       <li><span class="used-count">ID 25484</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">{{ $produk->title }}</a></h4>
                                    <p data-toggle="collapse" data-target="#more">{{ $produk->description }}</p>
                                    <!-- end:Coupon details -->
                                 </div>
                                 <!-- end:Coupon cont -->
                                 <div class="button-contain col-sm-3 text-center">
                                    <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">== Go</span> <span class="btn-hover">Detail</span> </p>
                                 </div>
                              </div>
                              <!-- //row -->
                           </div>
                           @endforeach
                           <!--/COUPON-->
                        </div>
                        <!-- / tabpanel -->
                     </div>
                     <!-- end: Tab content -->
                     <!-- Poplura stores -->
                     
                     <!-- end:Popular stores widget -->
                     {!! $data->render() !!}
                     
                  </div>
               </div>
            </div>
            </div>
            
         </section>
@endsection
