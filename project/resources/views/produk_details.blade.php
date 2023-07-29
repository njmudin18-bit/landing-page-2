<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <title>{{ $nama_halaman }} | {{ $data->data->nama }}</title>
  <meta name="google-site-verification" content="Eb2MSkL_J2uwUsTkMwHICKpuleMeph0mXZVlZtj5Pl4" />
  <meta name="description" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta name="keywords" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta name="subject" content="{{ $data->data->nama }}">
  <meta name="language" content="ID">
  <meta name="author" content="{{ $data->data->nama }}">
  <meta name="designer" content="IT Department - {{ $data->data->nama }}">
  <meta name="copyright" content="Copyright &copy; {{ $data->data->nama }}">
  <meta name="url" content="{{ url()->current() }}">
  <meta name="identifier-URL" content="{{ url()->current() }}">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta property="og:description" content="{{ config('global.perusahaan_attributes.company_desc') }}">
  <meta property="og:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ URL::to('/'); }}">
  <meta property="twitter:title" content="{{ $nama_halaman }} - {{ $data->data->nama }}">
  <meta property="twitter:description" content="">
  <meta property="twitter:image" content="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">

  <!-- Mobile Specific Metas ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
  <link rel="icon" type="image/png" href="{{ config('global.API_URL') }}upload/general_images/{{ $data->data->icon_name }}">
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
    <x-bread-crumbs :data="['data' => $data]" />
    <!-- Breadcrumbs End -->

    <!-- Produk Detail Start -->
    <div class="rs-inner-blog pt-120 pb-105 md-pt-80 md-pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 md-mb-50">
            <div class="row">
              <div class="col-lg-12 mb-50">
                <div class="blog-item">
                  <div class="blog-img">
                    <a href="#">
                      <img src="{{ config('global.API_URL') }}upload/produk_images/{{ $data_details->data->images }}" alt="{{ $data->data->nama }}">
                    </a>
                  </div>
                  <div class="blog-content">
                    <h3 class="blog-title"><a href="#">{{ $nama_halaman }}</a></h3>
                    <div class="blog-meta">
                      <ul class="btm-cate">
                        <li>
                          <div class="author">
                            <i class="fi fi-rr-book"></i> {{ $data_details->data->jenis_produk }}
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="blog-desc">
                      {!! $data_details->data->available_types !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 pl-25 md-pl-15">
            <div class="widget-area">
              <div class="categories mb-50">
                <div class="widget-title mb-15">
                  <h3 class="title">Kategori</h3>
                </div>
                <ul>
                  <?php
                  foreach ($kategori as $key => $value) {
                    $id = $value->id;
                  ?>
                    <li>
                      <a href="{{ url('/') }}/{{ strtolower($value->jenis_produk) }}">{{ $value->jenis_produk }} ({{ \App\Http\Controllers\Company::get_jumlah_produk($id); }})</a>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
              <div class="recent-posts mb-50">
                <div class="widget-title">
                  <h3 class="title">Produk terbaru kami</h3>
                </div>
                <?php
                foreach ($product_top_10 as $key => $value) {
                  $class = $key == 0 ? "no-border" : "";
                ?>
                  <div class="recent-post-widget {{ $class }}">
                    <div class="post-img">
                      <a href="{{ url('/') }}/view/{{ $value->slug }}">
                        <img src="{{ config('global.API_URL') }}upload/produk_images/{{ $value->images }}" alt="">
                      </a>
                    </div>
                    <div class="post-desc">
                      <a href="{{ url('/') }}/view/{{ $value->slug }}">{{ $value->nama_produk }}</a>
                      <span class="date-post">{{ $value->jenis_produk }}</span>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Produk Detail End -->

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