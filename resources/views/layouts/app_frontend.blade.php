<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title> {{ $website_config->title }}</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="Kupons" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="shortcut icon" href="#">
      <link href="{{ asset('assets/kupon/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/kupon/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/kupon/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/kupon/assets/css/animsition.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('assets/kupon/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css">
      <!-- Theme styles -->
      <link href="{{ asset('assets/kupon/assets/css/style.css') }}" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <link rel="shortcut icon" href="{{ asset('assets/metronic/assets/favicon.ico') }}" /> </head>
   </head>
   <body>
        <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!-- Navigation Bar-->
         <header class="header">
            <div class="top-nav  navbar m-b-0 b-0">
               <div class="container">
                  <div class="row">
                     <!-- LOGO -->
                     <div class="topbar-left col-sm-3 col-xs-4">
                        <a href="index.html" class="logo"> <img src="{{ asset('uploads/setting/original/'.$website_config->logo) }}" alt="" class="img-responsive"> </a>
                     </div>
                     <!-- End Logo container-->
                     <div class="menu-extras col-sm-9 col-xs-8">
                        <ul class="nav navbar-nav navbar-right pull-right">
                           <li>
                              <form role="search" class="app-search pull-left hidden-xs">
                                 <div class="input-group">
                                    <input class="form-control" placeholder="Search coupons ..." aria-label="Text input with multiple buttons"> 
                                 </div>
                                 <a href=""><i class="ti-search"></i></a> 
                              </form>
                           </li>
                           <li class="dropdown hidden-xs">
                              <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <i class="ti-shopping-cart"></i> <span class="badge badge-xs badge-danger">3</span> </a>
                              <ul class="dropdown-menu dropdown-menu-lg">
                                 <li class="notifi-title">My Coupons</li>
                                 <li class="list-group">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                       <div class="media">
                                          <div class="media-left"> <img src="http://placehold.it/120x50" alt=""> </div>
                                          <div class="media-body clearfix">
                                             <div class="media-heading">Up to 30%</div>
                                             <p class="m-0"> <small>Shopname coupon</small> </p>
                                          </div>
                                       </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                       <div class="media">
                                          <div class="media-left"> <img src="http://placehold.it/120x50" alt=""> </div>
                                          <div class="media-body clearfix">
                                             <div class="media-heading">Up to 30%</div>
                                             <p class="m-0"> <small>Shopname coupon</small> </p>
                                          </div>
                                       </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                       <div class="media">
                                          <div class="media-left"> <img src="http://placehold.it/120x50" alt=""> </div>
                                          <div class="media-body clearfix">
                                             <div class="media-heading">Up to 30%</div>
                                             <p class="m-0"> <small>Shopname coupon</small> </p>
                                          </div>
                                       </div>
                                    </a>
                                    <!-- last list item -->
                                    <a href="javascript:void(0);" class="list-group-item"> <small>Print all coupons</small> </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown user-box">
                              <a href="" class="dropdown-toggle profile btn btn-default" data-toggle="dropdown" aria-expanded="true">
                              My account
                              </a>
                              <ul class="dropdown-menu" style="margin-top:16px">
                                 <li><a href="javascript:void(0)"> LogIn</a> </li>
                                 <li><a href="javascript:void(0)">Registration</a> </li>
                                 <li><a href="javascript:void(0)">Help Center </a> </li>
                              </ul>
                           </li>
                        </ul>
                        <div class="menu-item">
                           <!-- Mobile menu toggle-->
                           <a class="navbar-toggle">
                              <div class="lines"> <span></span> <span></span> <span></span> </div>
                           </a>
                           <!-- End mobile menu toggle-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="navbar-custom shadow">
               <div class="container">
                  <div id="navigation">
                     <!-- Navigation Menu-->
                     <ul class="navigation-menu">
                        <li class="active"> <a href="{{ url('/') }}"><i class="ti-home"></i> <span> Home </span> </a> </li>
                        <li class="has-submenu">
                           <a href="{{ url('/toko') }}"><i class="ti-shopping-cart"></i> <span> Products </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="{{ url('/artikel') }}"><i class="ti-pencil-alt"></i> <span> Articles </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="{{ url('/halaman').'/apa-itu-jafra?' }}"><i class="ti-heart"></i> <span> About Jafra </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="#"><i class="ti-shopping-cart-full"></i> <span> How To Buy? </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="#"><i class="ti-user"></i> <span> How To Join? </span> </a>
                        </li>
                        <li class="has-submenu">
                           <a href="#"><i class="ti-id-badge"></i> <span> Contact Us </span> </a>
                        </li>
                     </ul>
                     <!-- End navigation menu  -->
                  </div>
               </div>
            </div>
         </header>
         <!-- Navigation ends -->
         <div class="wrapper">

        @yield('content')
   <!-- Footer -->
            <footer id="footer">
               <div class="btmFooter">
                  <div class="container">
                       <div class="col-sm-12 text-center m-t-20">
                        <p> <strong>
                           {{ $website_config->year }} &copy;  {{ $website_config->copyright }}.
                           </strong> 
                        </p>
                     </div>
                     
                  </div>
               </div>
            </footer>
           
         </div>
      </div>
      <!-- //wrapper -->
   <!-- //wrapper -->
      <!-- jQuery  -->
      <script src="{{ asset('assets/kupon/assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/kupon/assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/kupon/assets/js/animsition.min.js') }}"></script>
      <script src="{{ asset('assets/kupon/owl.carousel/owl.carousel.min.js') }}"></script>
      <!-- Kupon js -->
      <script src="{{ asset('assets/kupon/assets/js/kupon.js') }}"></script>

    <!-- Scripts -->

</body>
</html>
