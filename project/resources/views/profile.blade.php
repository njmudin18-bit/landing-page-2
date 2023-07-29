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

      <!-- About Start -->
			<div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-75">
				<div class="container">
					<div class="row y-middle">
						<div class="col-lg-6 md-mb-50">
							<div class="images-part">
								<img src="{{ asset('assets/images/about/style1/about.png') }}" alt="{{ $data->data->nama }}">
							</div>
						</div>
						<div class="col-lg-6 pl-50 md-pl-15">
							<div class="sec-title">
								<span class="sub-text">
									<img src="{{ asset('assets/images/shape-1.png') }}" alt="{{ $data->data->nama }}">
									{{ $data->data->nama }}
								</span>
                <div id="isi">
                  
                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About End -->

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

      async function load_data() {
        let result;

        try {
            result = await $.ajax({
                url: "{{ route('company.profile') }}",
                type: 'POST',
                data: {
                  "_token": token
                }
            });

            let data          = JSON.parse(result);
            var contents      = [];
            var images        = [];
            var isi_images    = "{{ config('global.API_URL') }}" + "upload/profile_images/" + data.data.images;
            
            contents.push('<h2 class="title pb-20">' + data.data.main_title + '</h2>' +
                          '<p class="desc pb-37"> ' + data.data.contents + '</p>');

            images.push('<img src="' + isi_images + '" alt="{{ $data->data->nama }}">')

            $("#loader_product").hide();
            $("#isi").html(contents);
            $(".images-part").html(images);
        } catch (error) {
          Swal.fire(
            'Oops...',
            error.responseJSON.message,
            'info'
          );
        }
      }

      $(document).ready(function() {
        load_data();
      });
    </script>
	</body>
</html>