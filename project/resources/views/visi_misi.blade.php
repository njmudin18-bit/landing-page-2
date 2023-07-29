<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
  <head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>{{ $nama_halaman }} | {{ $data->data->nama }}</title>

		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta name="title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
    <meta name="description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
    <meta name="keywords" content="PT. Multi Arta Industri, PT. MAiN, Perusahaan pembuat silicone dan rubber, Pabrik pembuat silicone dan rubber, Manufacturers pembuat silicone dan rubber, Perusahaan silicone dan rubber, Pabrik silicone dan rubber, Pabrik pembuat rubber, Pabrik silicone, Pabrik rubber dan silicone terbaik.">
    <meta name="subject" content="{{ $data->data->nama }}">
    <meta name="language" content="ID">
    <meta name="author" content="{{ $data->data->nama }}">
    <meta name="designer" content="IT Department - {{ $data->data->nama }}">
    <meta name="copyright" content="Copyright &copy; {{ $data->data->nama }}">
    <meta name="url" content="{{ url()->current() }}">
    <meta name="identifier-URL" content="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
    <meta property="og:description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
    <meta property="og:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
    <meta property="twitter:description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
    <meta property="twitter:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->logo_name }}">

		<!-- favicon -->
		<link rel="apple-touch-icon" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">
		
    <!-- CSS -->
    <x-css-components />

    <style>
      #customers_ku.thumbnails {
        overflow: hidden;
      }

      #customers_ku.thumbnails li {
        margin: 10px 10px 10px;
        float: left;
        width: 22.5%;
        position: relative;
        padding: 1px;
        min-height: 120px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
        transition: transform .5s, filter .5s ease-in-out;
        filter: grayscale(100%);
      }

      #customers_ku.thumbnails li img {
        max-width: 45%;
        display: block;
        position: absolute;
        max-height: fit-content;
        top: 50%;
        transform: translate(-50%, -50%);
        left: 50%;
      }

      #customers_ku.thumbnails li:hover {
        border: 1px solid #ff6314;
        filter: grayscale(0);
        transform: scale(1);
      }
    </style>
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
			<x-bread-crumbs :data="['data' => $data]" />
			<!-- Breadcrumbs End -->

      <!-- Visi dan Misi Start -->
      <div class="rs-gallery gallery-style1 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
          <div class="sec-title text-center mb-55 md-mb-35">
            <span class="sub-text">
              <img src="{{ asset('assets/images/shape-1.png') }}" alt="{{ $data->data->nama }}">
              {{ $data->data->nama }}
            </span>
            <?php
              $text = explode(" ", $nama_halaman);
              $text_visi = $text[0];
              $text_misi = $text[2];
            ?>
            <h2 class="title">{{ $text_visi }}</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
              <h2 id="text-visi" class="text-center text-career"></h2>
            </div>
            <div id="loader_visi" class="spinner-border text-primary mt-5" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
          <hr class="mt-55 mb-55">
          <div class="sec-title text-center mb-55 md-mb-35">
            <span class="sub-text">
              <img src="{{ asset('assets/images/shape-1.png') }}" alt="{{ $data->data->nama }}">
              {{ $data->data->nama }}
            </span>
            <h2 class="title">{{ $text_misi }}</h2>
          </div>
          <div id="border-yellow" class="row justify-content-center rs-project-details">
            <div class="col-md-12 col-sm-12 project-information">
              <ul id="text-misi" class="check-lists check-lists3 check-single">                              
                       
              </ul>
            </div>
            <div id="loader_misi" class="spinner-border text-primary mt-5" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Visi dan Misi End -->

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

		<!-- JS -->
		<x-js-components :data="['data' => $data]" />
    <script>
      var token = '{{ csrf_token() }}';

      async function visi_list() {
        let result;

        try {
            result = await $.ajax({
                url: "{{ route('visi.list') }}",
                type: 'POST',
                data: {
                  "_token": token
                }
            });

            let data          = JSON.parse(result);
            var contents      = data.data.text;

            $("#loader_visi").hide();
            $("#text-visi").html(contents);
            
        } catch (error) {
          Swal.fire(
            'Oops...',
            error.responseJSON.message,
            'info'
          );
        }
      }

      async function misi_list() {
        let result;

        try {
            result = await $.ajax({
                url: "{{ route('misi.list') }}",
                type: 'POST',
                data: {
                  "_token": token
                }
            });

            let data          = JSON.parse(result);
            var contents      = [];

            $.each(data.data, function(key, val) {
              contents.push('<li>' + val.text + '</li>');
            });

            $("#loader_misi").hide();
            $("#text-misi").html(contents);
            
        } catch (error) {
          Swal.fire(
            'Oops...',
            error.responseJSON.message,
            'info'
          );
        }
      }

      $(document).ready(function() {
        visi_list();
        misi_list();
      });
    </script>
	</body>
</html>