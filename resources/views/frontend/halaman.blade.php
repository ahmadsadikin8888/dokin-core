@extends('layouts.app_frontend')

@section('content')
<div class="breadcrmb-wrap hidden-xs">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a> 
                        </li>
                        <li class="breadcrumb-item"><a href="#">Search</a> 
                        </li>
                        <li class="breadcrumb-item active">{{ $post->title }}</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!--end:Breadcrumbs -->
         <div class="blog-content m-t-40">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 blog-quote">
                     <h5>Promotions</h5>
                     <p>"Yo sociis shiznit penatibizzle magnizzle crackalackin sure montes, check it out ridiculus"</p>
                     <cite>— &nbsp;&nbsp; Codenpixel<span>The Founder and Coowner</span></cite>
                     <ul class="bq-social list-unstyled">
                        <li><a href="#"><i class="ti-facebook"></i></a> 
                        </li>
                        <li><a href="#"><i class="ti-twitter"></i></a> 
                        </li>
                        <li><a href="#"><i class="ti-google"></i></a> 
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-9 blog m-t-30">
                     <h3>{{ $post->title }}</h3>
                     <div class="img-caption">
                        <img src="{{ asset('uploads/pages/original/'.$post->image) }}" class="img-responsive" alt="">
                     </div>
                     <p>
                     {!! $post->content !!}
                     </p>
                  </div>
               </div>
            </div>
         </div>
@endsection
