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

			<!-- Contact Section Start -->
			<div class="rs-contact contact-style1 bg3">
        <div class="row">
          <div class="col-lg-5 offset-2 con-left-6">
            <div class="contact-section">
              <div class="contact-wrap">
                <div class="sec-title mb-45">
                  <span class="sub-text">
                    <img src="{{ asset('assets/images/shape-1.png') }}" alt="{{ $data->data->nama }}">
                    {{ $data->data->nama }}
                  </span>
                  <h2 class="title">
                    Terhubung dengan kami
                  </h2>
                </div>
                <div id="form-messages"></div>
                <form id="contact_form">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30 form-group">
                      <input class="from-control text-capitalize" type="text" id="subject" name="subject" placeholder="Judul pesan" required="">
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30 form-group">
                      <input class="from-control text-capitalize" type="text" id="name" name="name" placeholder="Nama anda" required="">
                    </div>   
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30 form-group">
                      <input class="from-control text-lowercase" type="email" id="email" name="email" placeholder="Email anda" required="">
                    </div>
                    <div class="col-lg-12 mb-30 form-group">
                      <textarea class="from-control" id="message" name="message" placeholder="Pesan anda" required=""></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        @if ($errors->has('g-recaptcha-response'))
                          <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        @endif
                      </div>  
                    </div>
                  </div>
                  <div class="btn-part mt-4">                                            
                    <div class="form-group mb-0">
                      <button id="button_contact" class="readon more submit" type="submit">KIRIM SEKARANG</button>
                    </div>
                  </div>
                </form> 
              </div>
            </div>
          </div>
          <div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
            <div class="contact-box-item">
              <div class="contact-box mb-20">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/contact/style1/icons/1.png') }}" alt="images">
                </div>
                <div class="content-text">
                  <h4 class="title"><a href="https://goo.gl/maps/quw2U71XacBGDTne6" target="_blank">Office</a></h4>
                  <p class="services-txt">{{ $data->data->alamat }}</p>
                </div>
              </div>
              <div class="contact-box mb-20">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/contact/style1/icons/2.png') }}" alt="images">
                </div>
                <div class="content-text">
                  <h4 class="title"><a href="#">Email us</a></h4>
                  <p class="services-txt">
                    <a href="mailto:{{ $data->data->email }}">{{ $data->data->email }}</a>
                  </p>
                </div>
              </div>
              <div class="contact-box">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/contact/style1/icons/3.png') }}" alt="images">
                </div>
                <div class="content-text">
                  <h4 class="title"><a href="#">Call us</a></h4>
                  <p class="services-txt">
                    <a href="tel:{{ $data->data->telepon }}">Phone: {{ $data->data->telepon }}</a><br>
                    <a href="tel:{{ $data->data->fax }}">Fax: {{ $data->data->fax }}</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 contact-right-img"></div>
        </div>
			</div>
			<!-- Contact Section End -->

			<!-- Call To Action Choose Start -->
      <div class="rs-contact contact-style6">
        <div class="row no-gutters">
          <div class="col-lg-12">
            <div class="contact-map">
            {!! $data->data->maps !!}
            </div>
          </div>
        </div>
			</div>
			<!-- Call To Action Choose End -->

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

		<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
      $(document).ready(function() {
        var token = '{{ csrf_token() }}';

        $(function() {
          $.validator.setDefaults({
            submitHandler: contact_action
          });
          $('#contact_form').validate({
            rules: {
              subject: {
                required: true,
                minlength: 5
              },
              name: {
                required: true,
                minlength: 5
              },
              email: {
                required: true,
                email: true
              },
              message: {
                required: true,
                minlength: 15
              },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            }
          });

          function contact_action() {
            var captcha = grecaptcha.getResponse();
            if (captcha == "" || captcha == null) {
              Swal.fire(
                'Oops...',
                'Silahkan cek dahulu captcha',
                'info'
              )
            } else {
              $.ajax({
                type: 'POST',
                url: "{{ route('contact.save') }}",
                data: {
                  "name" : $("#name").val(),
                  "email" : $("#email").val(),
                  "subject" : $("#subject").val(),
                  "message" : $("#message").val(),
                  "g-recaptcha-response": grecaptcha.getResponse(),
                  "_token": token
                },
                beforeSend: function() {
                  $("#error").fadeOut();
                  $("#button_contact").prop('disabled', true);
                  $("#button_contact").html('Proses Kirim <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                },
                success: function(response) {
                  var data = JSON.parse(response);
                  if(data.status == 'ok') {
                    Swal.fire(
                      'Sukses',
                      'Pesan anda sudah terkirim',
                      'success'
                    )
                  } else {
                    Swal.fire(
                      'Oops...',
                      'test',
                      'info'
                    )
                  }

                  grecaptcha.reset();
                  $("#button_contact").prop('disabled', false);
                  $("#button_contact").html('Kirim Sekarang');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  Swal.fire(
                    'Oops...',
                    jqXHR.statusText,
                    textStatus
                  );
                }
              }); 
            }
            return false;
          }

          var width = $('.g-recaptcha').parent().width();
          console.log(width);
          if (width < 302) {
            var scale = width / 302;
            $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('transform-origin', '0 0');
            $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
          }
        });
      });
    </script>
	</body>
</html>