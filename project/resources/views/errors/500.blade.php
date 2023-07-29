<?php
  $data = \App\Http\Controllers\Company::get_company_details();

  $nama_halaman = "500";
  $active       = "current-menu-item";
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
  <head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>{{ $nama_halaman }} | {{ $data->data->nama }}</title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ URL::to('/'); }}">
    <meta property="twitter:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}">

		<!-- favicon -->
		<link rel="apple-touch-icon" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">
		
    <!-- Bootstrap v4.4.1 css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
		<!-- slick css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
		<!-- Main Menu css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rsmenu-main.css') }}">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	</head>
	<body class="home-orange-color3">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
    <x-loader-main :data="['data' => $data]" />
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header header-style2 header-orange-modify2">
					<!-- Toolbar Area Start -->
					<x-topbar :data="['data' => $data]" />
					<!-- Toolbar Area End -->
					
					<!-- Menu Start -->
					<x-navbar :data="['data' => $data]" />
					<!-- Menu End -->

					<!-- Canvas Mobile Menu start -->
					<x-mobile-navbar :data="['data' => $data]" />
					<!-- Canvas Menu end -->                           
				</header>
				<!--Header End-->
			</div>
			<!--Full width header End-->

      <!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img3">
        <div class="container">
          <div class="breadcrumbs-inner">
            <h1 class="page-title">{{ $nama_halaman }}</h1>
            <ul class="breadcrumbs-area">
              <li title="Go to konstruk">
                <a class="active" href="{{ url('/') }}">Beranda</a>
              </li>
              <li>{{ $nama_halaman }}</li>
            </ul>
          </div>
        </div>
			</div>
			<!-- Breadcrumbs End -->

      <!-- Produk Section Start -->
      <div class="rs-services services-main-home gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
          <div class="sec-title text-center mb-55 md-mb-35">
            <span class="sub-text">
              <img src="{{ asset('assets/images/shape-1.png') }}" alt="{{ $data->data->nama }}">
              {{ $data->data->nama }}
            </span>
            <h2 class="title">{{ $nama_halaman }}</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
              <h2 class="text-center text-career">Oops error.</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Produk Section End -->

		</div> 
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		<x-footer :data="['data' => $data]" />
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp" class="orange-color2">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- Search Modal Start -->
		<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="search-block clearfix">
		                <form>
		                    <div class="form-group">
		                        <input class="form-control" placeholder="Search Here..." type="text">
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Search Modal End -->

		<!-- modernizr js -->
		<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
		<!-- jquery latest version -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<!-- Bootstrap v4.4.1 js -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- op nav js -->
		<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<!-- wow js -->
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<!-- Skill bar js -->
		<script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
		<!-- imagesloaded js -->
		<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<!-- Slick js -->
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<!-- waypoints.min js -->
		<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
		<!-- magnific popup js -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- counterup.min js -->
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script> 
		<!-- contact form js -->
		<script src="{{ asset('assets/js/contact.form.js') }}"></script>
		<!-- main js -->
		<script src="{{ asset('assets/js/main.js') }}"></script>

		<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</body>
</html>